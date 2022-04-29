@component('mail::message')

# Name:  {{ $data['name'] }}

## Email: {{ $data['email'] }}

{{ $data['message'] }}
@endcomponent
