<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('contacts', compact('contacts'));
    }

    public function store(Request $request) {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/contacts');
    }

    public function delete($id) {
        Contact::find($id)->delete();
        return redirect('/contacts');
    }
    public function edit($id)
{
    $contact = Contact::find($id);
    return view('edit-contact', compact('contact'));
}
public function update(Request $request, $id)
{
    $contact = Contact::find($id);

    $contact->update([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect('/contacts');
}
}
