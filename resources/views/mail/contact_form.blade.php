@component('mail::message')

    # Contact Form Submission

    Good day,

    You have received a new contact form submission. Here are the details:

    ---

    # Name:
    {{ $data['first_name'] }}
    # Email:
    {{ $data['email'] }}
    # Phone:
    {{ $data['phone'] }}
    # Company Size:
    {{ $data['company_size'] ?? 'Not specified' }}
    # Budget:
    {{ $data['budget'] ?? 'Not specified' }}
    # Source:
    {{ $data['source'] ?? 'Not specified' }}
    # Service:
    {{ $data['service'] ?? 'Not specified' }}
    # Message:
    {{ $data['message'] }}

    Thank you,
    # {{ config('app.name') }}

@endcomponent

