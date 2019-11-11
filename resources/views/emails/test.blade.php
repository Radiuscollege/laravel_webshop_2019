@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Klik, gebeurt toch niks....
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
