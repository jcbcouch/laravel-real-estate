<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Realtor;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    

    public function store(Request $request) {
        $formFields = $request->validate([
            'listing' => 'required',
            'listing_id' => 'required',
            'name' => 'required',
            'email' => 'required', 'email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Contact::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }



}
