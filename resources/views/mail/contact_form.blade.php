@component('mail::message')

    # Contact Form Submission

    Good day,

    You have received a new contact form submission. Here are the details:

    ---

    # Name:
    {{ $data['fullname'] }}
    # Email:
    {{ $data['email'] }}
    # Phone:
    {{ $data['phoneNumber'] }}

    # Service:
    {{ $data['service'] ?? 'Not specified' }}
    # Message:
    {{ $data['comment'] }}

    Thank you,
    # {{ config('app.name') }}

@endcomponent

