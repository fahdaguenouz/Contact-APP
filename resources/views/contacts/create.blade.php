@extends('layouts.main')

@section("content")
<div class="container mt-5">
    <h2>Add New Contact</h2>
    <form  >
       <!-- CSRF token for security -->
        <div class="form-group mb-3">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <button type="submit" class="btn btn-success">Add Contact</button>
    </form>
</div>
@endsection
