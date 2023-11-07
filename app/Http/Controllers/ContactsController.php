<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsNewRequest;
use App\Http\Requests\ContactsUpdateRequest;
use App\Models\Contacts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Contacts $contacts)
    {
        $contacts = $contacts->all();
        return view('contacts.home', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactsNewRequest $contactsNewRequest, Contacts $contacts): RedirectResponse
    {
        $contacts->create($contactsNewRequest->all());
        return redirect(route('contacts.home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        return view('contacts.edit', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contacts)
    {
        return view('contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactsUpdateRequest $contactsUpdateRequest, Contacts $contacts)
    {
        $contacts->update($contactsUpdateRequest->all());
        return redirect(route('contacts.home'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contacts)
    {
        $contacts->destroy($contacts->id);
        return redirect(route('contacts.home'));
    }
}
