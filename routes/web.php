<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('layouts.main');
});


// route 1

// creation du fonction getcontacts qui return collection des contacts
function getContacts($companyId = null){
    $contacts = collect([
        ["id" => "1", "FirstName" => "Contact 1", "email" => "contact1@example.com", "phone" => "063232332232", "company" => "1"],
        ["id" => "2", "FirstName" => "Contact 2", "email" => "contact2@example.com", "phone" => "063232332232", "company" => "2"],
        ["id" => "3", "FirstName" => "Contact 3", "email" => "contact3@example.com", "phone" => "063232332232", "company" => "3"],
        ["id" => "4", "FirstName" => "Contact 4", "email" => "contact4@example.com", "phone" => "063232332232", "company" => "4"],
        ["id" => "5", "FirstName" => "Contact 5", "email" => "contact5@example.com", "phone" => "063232332232", "company" => "5"],
        ["id" => "6", "FirstName" => "Contact 6", "email" => "contact6@example.com", "phone" => "063232332232", "company" => "1"],

    ]);

    if ($companyId !== null && $companyId != "0") {
        return $contacts->where('company', $companyId);
    }
    return $contacts;
}

// route /contacts qui afficher la liste des contacts on tableaux
Route::get('/contacts', function (Request $request) {
    $companyId = $request->input('company_id', null);  // Use the 'company_id' from the query string
    return view('contacts.index', [
        "contacts" => getContacts($companyId),  // Pass the company ID to filter contacts
        "companies" => getCompanies()
    ]);
})->name('contacts');

// route 2
// la route pour creation s=d'un nouvel contacts
Route::get('/contact/create', function () {
    return view('contacts.create');
})->name('create');




// route 3

// la route pour filtrer les contacts avec l'id passe dans la route et routern detail
Route::get('/contact/{id}', function ($id) {
    $contact = getContacts()->firstWhere('id', $id);

    if (!$contact) {
        abort(404); // Return a 404 not found if no contact is found with the given ID
    }

    return view('contacts.show', ['contact' => $contact]);

})->name('details');


function getCompanies(){
    return collect([
        ["id" => "1", "Name" => "Companies1", "email" => "Companies1@example.com", "phone" => "063232332232"],
        ["id" => "2", "Name" => "Companies2", "email" => "Companies2@example.com", "phone" => "063232332232"],
        ["id" => "3", "Name" => "Companies3", "email" => "Companies3@example.com", "phone" => "063232332232"],
        ["id" => "4", "Name" => "Companies4", "email" => "Companies4@example.com", "phone" => "063232332232"],
        ["id" => "5", "Name" => "Companies5", "email" => "Companies5@example.com", "phone" => "063232332232"],
        ["id" => "6", "Name" => "Companies6", "email" => "Companies6@example.com", "phone" => "063232332232"],

    ]);

};
