@component('mail::message')
# Introduction

Thanks so much for registering.

@component('mail::button', ['url' => 'https://marinarozova.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
