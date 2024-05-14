@extends('layouts.main')

@section("content")
<div class=" container-fluid mt-5">
    <div class="row ">
        <div class="col-4">
            <h1>All Contacts</h1>

        </div>
        <div class="col-4 d-flex justify-content-end pe-2" >
            @include('partial._filter')
        </div>
        <div class="col-4 text-md-right">

            <a href="{{ route('create') }}" class="btn btn-success mt-2">Ajouter</a> <!-- Make sure the route for 'Ajouter' is correctly set -->
        </div>
    </div>
    @if($contacts->isEmpty()) {{-- Check if contacts collection is empty --}}
    <div class="alert alert-danger" role="alert">
        Aucun contact trouvé.
    </div>
@else
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact['id'] }}</td>
                <td>{{ $contact['FirstName'] }}</td>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['phone'] }}</td>
                <td>{{ $contact['company'] }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">Modifier</a>
                    <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Supprimer</a>
                    <a href="{{ route('details', ['id' => $contact['id']]) }}" class="btn btn-sm btn-info">Détail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>
@endsection
