<x-mail::message>
# Hello, here are your loging details!

<h3>Name:  {{$content['name']}}</h3>
<h3>Email:  {{$content['email']}}</h3>
<h3>Password:  {{$content['password']}}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
