@component('mail::message')



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
some place to go
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
