@component('mail::message')

# Contact Message from Qualls.IO

There has been a contact form submitted to Qualls.IO

* Name: {{$contact->contact_name}}
* Email: {{$contact->contact_email}}
* Category: {{$contact->contact_category}}
* IP: {{$contact->ip_address}}

---

{{$contact->contact_message}}

---

Thanks,<br>
{{ config('app.name') }}


@endcomponent
