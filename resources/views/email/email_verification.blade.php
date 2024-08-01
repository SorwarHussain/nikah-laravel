<x-mail::message>
# Welcome to {{ config('app.name') }}!

Thank you for signing up with us. Please verify your email address to complete your registration.

<x-mail::button :url="$url" color="success">
Verify Email
</x-mail::button>

If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}

---

If you're having trouble clicking the "Verify Email" button, copy and paste the URL below into your web browser: [{{ $url }}]({{ $url }})

---

{{ config('app.name') }}

<div style="margin-top: 10px;">
    Follow us on:
    <a href="https://www.facebook.com/SylhetiNikah" style="margin-right: 10px;">Facebook</a>
    <a href="https://www.youtube.com/@sylhetinikah1552">Youtube</a>
    <a href="https://t.me/sylhetinikah">Telegram</a>
</div>
</x-mail::message>
