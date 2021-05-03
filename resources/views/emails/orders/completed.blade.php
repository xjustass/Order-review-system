@component('mail::message')
# Užsakymas įvykdytas

Sveiki,

Jūsų užsakymas yra įvykdytas. Kviečiame atsiimti užsakymų atsiėmimo vietoje.

<b>Adresas:</b> Jonavos g. 104, Kaunas<br>
<b>Darbo laikas:</b> pirmadienis - penktadienis 8:30 - 17:00

Daugiau informacijos apie užsakymą pateiktą čia:
@component('mail::button', ['url' => $url])
    Peržiūrėti užsakymą
@endcomponent

Pagarbiai<br>
{{ config('app.name') }}
@endcomponent