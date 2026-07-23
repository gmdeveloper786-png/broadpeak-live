<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function contact(Request $request): RedirectResponse
    {
        if ($this->honeypotFilled($request)) {
            return $this->fakeSuccessResponse();
        }

        $rate = $this->redirectIfRateLimited('contact-form:'.$request->ip(), $request, false);
        if ($rate !== null) {
            return $rate;
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
            'cv' => 'nullable|file|max:5120|mimes:pdf,doc,docx',
        ]);

        $attachmentPath = null;
        $attachmentOriginalName = null;
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $attachmentPath = $file->getRealPath();
            $attachmentOriginalName = $file->getClientOriginalName();
        }

        $fields = collect($validated)->except('cv')->all();
        if ($attachmentOriginalName !== null) {
            $fields['cv'] = 'Attached: '.$attachmentOriginalName;
        }

        $to = config('mail.contact_to');

        Mail::to($to)->send(new ContactSubmissionMail(
            'Contact form',
            $fields,
            $attachmentPath,
            $attachmentOriginalName
        ));

        RateLimiter::hit('contact-form:'.$request->ip(), 60);

        return redirect()->back()->with('form_success', 'Thank you — your message has been sent.');
    }

    public function quote(Request $request): RedirectResponse
    {
        if ($this->honeypotFilled($request)) {
            return $this->fakeSuccessResponse();
        }

        $rate = $this->redirectIfRateLimited('quote-form:'.$request->ip(), $request, true);
        if ($rate !== null) {
            return $rate;
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'nullable|string|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('open_request_quote_modal', true);
        }

        $validated = $validator->validated();

        $to = config('mail.contact_to');

        Mail::to($to)->send(new ContactSubmissionMail('Request quote', $validated));

        RateLimiter::hit('quote-form:'.$request->ip(), 60);

        return redirect()->back()->with('form_success', 'Thank you — your quote request has been sent.');
    }

    private function honeypotFilled(Request $request): bool
    {
        return $request->filled('website');
    }

    /**
     * Bots often fill hidden fields — pretend success, do not send mail or rate-limit.
     */
    private function fakeSuccessResponse(): RedirectResponse
    {
        return redirect()->back()->with('form_success', 'Thank you — your message has been sent.');
    }

    private function redirectIfRateLimited(string $key, Request $request, bool $openQuoteModal): ?RedirectResponse
    {
        if (! RateLimiter::tooManyAttempts($key, 1)) {
            return null;
        }

        $seconds = RateLimiter::availableIn($key);
        $message = 'Please wait '.max(1, (int) ceil($seconds)).' seconds before submitting again.';

        $redirect = redirect()->back()
            ->withInput($request->except(['cv']))
            ->withErrors(['rate_limit' => $message]);

        if ($openQuoteModal) {
            $redirect->with('open_request_quote_modal', true);
        }

        return $redirect;
    }
}
