<?php

namespace App\Http\Controllers;

use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RealtorController extends Controller
{
    public function create() {
        return view('realtors.create');
    }


    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => ['required', 'email', Rule::unique('realtors', 'email')],
            'phone' => 'required',
        ]);

        if($request->filled('is_mvp')) {
            $formFields['is_mvp'] = 'on';
        } else {
            $formFields['is_mvp'] = 'off';
        }

        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Realtor::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
