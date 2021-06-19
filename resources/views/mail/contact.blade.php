@component('mail::message')
{{ $name }} Sent you a message which is as follows:<br>
Name: {{ $name }}<br>
Phone Number: {{ $phone }}<br>
Email Address: {{ $email }}<br>
Message: {{ $message }}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
