<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $formLabel,
        public array $fields,
        public ?string $attachmentPath = null,
        public ?string $attachmentOriginalName = null
    ) {}

    public function envelope(): Envelope
    {
        $replyTo = [];
        if (! empty($this->fields['email'])) {
            $replyTo[] = new Address(
                $this->fields['email'],
                (string) ($this->fields['name'] ?? '')
            );
        }

        return new Envelope(
            subject: 'Broadpeak-Intl website: ' . $this->formLabel,
            replyTo: $replyTo,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submission',
        );
    }

    /**
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if ($this->attachmentPath === null || $this->attachmentPath === '' || ! is_file($this->attachmentPath)) {
            return [];
        }

        $name = $this->attachmentOriginalName ?: basename($this->attachmentPath);

        return [
            Attachment::fromPath($this->attachmentPath)->as($name),
        ];
    }
}
