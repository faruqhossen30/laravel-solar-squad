<x-mail::message>
# Introduction

The body of your message.
<h3>First Name: {{$data['fname']}}</h3>
<h3>Last Name : {{$data['lname']}}</h3>
<h3>Email     : {{$data['email']}}</h3>
<h3>Phone     : {{$data['phone']}}</h3>
<h3>Message   : {{$data['details']}}</h3>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
