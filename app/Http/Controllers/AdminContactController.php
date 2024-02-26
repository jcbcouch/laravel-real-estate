<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminContactController extends Controller
{
    public function contacts() {
        return view('admin.contacts.list', [
            'contacts' => Contact::all()
        ]);
    }

    public function details(Contact $contact) {
        return view('admin.contacts.details', [
            'contact' => $contact
        ]);
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect('/admin/contacts');
    }

}
