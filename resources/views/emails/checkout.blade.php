@component('mail::message')
# Hello from PizzaHouse

Your purchase for the following items has ben confirmed.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
