@component('mail::message')
    {!! $mail->body !!}

    {{ config('app.name') }}
@endcomponent
