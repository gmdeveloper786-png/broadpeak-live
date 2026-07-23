<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>{{ $formLabel }}</title>
</head>
<body style="font-family: system-ui, sans-serif; line-height: 1.5; color: #222;">
  <h2 style="margin-bottom: 1rem;">{{ $formLabel }}</h2>
  <table style="border-collapse: collapse; max-width: 540px;">
    @foreach ($fields as $key => $value)
      @if ($value !== null && $value !== '')
        <tr>
          <td style="padding: 0.35rem 1rem 0.35rem 0; vertical-align: top; font-weight: 600;">{{ ucfirst(str_replace('_', ' ', $key)) }}</td>
          <td style="padding: 0.35rem 0; white-space: pre-wrap;">{{ $value }}</td>
        </tr>
      @endif
    @endforeach
  </table>
</body>
</html>
