@component('mail::message')

Email: {{ $contact['mail'] }}

Messaggio: {{ $contact['message'] }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
