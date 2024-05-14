@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Contact Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $contact['FirstName'] }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $contact['email'] }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $contact['phone'] }}</p>
            <p class="card-text"><strong>Company:</strong> {{ $contact['company'] }}</p>
            <a href="{{ url('/contacts') }}" class="btn btn-primary">Back to Contacts</a>
        </div>
    </div>
</div>
@endsection
