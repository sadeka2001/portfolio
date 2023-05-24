
<x-mail::message>

<h3>New message from{{ $contact_from['email'] }}</h3>
<p>Name:{{ $contact_from['name'] }}</p>
<p>Subject:{{ $contact_from['subject'] }}</p>
<p>Message:{{ $contact_from['message'] }}</p>

</x-mail::message>
