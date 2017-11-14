@component('mail::message')
Welcome {{$user->name}}

The body of your message.

@component('mail::button', ['url' => route('verified',
						 ['token' => $user->email_token,'email'=>$user->email])])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
