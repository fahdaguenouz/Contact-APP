<?php

use Illuminate\Support\Facades\Route;


Route::get('/contacts', function () {
    function getContacts(){
        return [
            ["id"=>"1", "FirstName"=>"Contact 1","email"=>"contact1@example.com","company"=>"company1"],
            ["id"=>"2", "FirstName"=>"Contact 2","email"=>"contact2@example.com","company"=>"company2"],
            ["id"=>"3", "FirstName"=>"Contact 3","email"=>"contact3@example.com","company"=>"company3"],
            ["id"=>"4", "FirstName"=>"Contact 4","email"=>"contact4@example.com","company"=>"company4"],
            ["id"=>"5", "FirstName"=>"Contact 5","email"=>"contact5@example.com","company"=>"company5"],

        ];

    };
    return view('contacts.index',["contacts"=>getContacts()]);
});



Route::get('/contact/create', function () {
    return view('contacts.create');
})->name('create');
