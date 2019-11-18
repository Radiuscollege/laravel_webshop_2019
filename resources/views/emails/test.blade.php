@component('mail::message')
# Barroc Intens

U heeft een product aangemaakt met de naam {{$name}}

@component('mail::button', ['url' => ''])
Klik om akkoord te gaan met deze offerte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
