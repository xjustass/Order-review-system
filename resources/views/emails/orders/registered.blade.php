@component('mail::message')
# Užsakymas

Jūsų užsakymas užregistruotas ir pradėtas vykdyti.

Užsakymo eigą galite patikrinti čia:

@component('mail::button', ['url' => $url])
Užsakymo eiga
@endcomponent

Pagarbiai<br>
{{ config('app.name') }}
@endcomponent
