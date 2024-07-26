@component('mail::message')
    # {{ __('Verification Code') }}

    {{ __('Your verification code is :code', ['code' => $user->verification_code]) }}

    {{ __('Thanks,') }}<br>
    {{ config('app.name') }}
@endcomponent
