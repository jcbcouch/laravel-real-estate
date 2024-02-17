<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function listings() {
        return view('admin.listings', [
            'listings' => Listing::all()
        ]);
    }

    public function edit(Listing $listing) {
        return view('admin.listings.edit', [
            'listing' => $listing,
            'realtors'=> Realtor::all()
        ]);
    }

    public function update(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'realtor_id' => 'required',
            'title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'description' => 'required',
            'price' => 'required',
            'bedrooms' => 'required',
            'garage' => 'required',
            'sqft' => 'required',
            'bathrooms' => 'required',
            'lot_size' => 'required',
            'is_published' => 'required'
        ]);

        if($request->hasFile('photo_main')) {
            $formFields['photo_main'] = $request->file('photo_main')->store('photos', 'public');
        }
        if($request->hasFile('photo_1')) {
            $formFields['photo_1'] = $request->file('photo_1')->store('photos', 'public');
        }
        if($request->hasFile('photo_2')) {
            $formFields['photo_2'] = $request->file('photo_2')->store('photos', 'public');
        }
        if($request->hasFile('photo_3')) {
            $formFields['photo_3'] = $request->file('photo_3')->store('photos', 'public');
        }
        if($request->hasFile('photo_4')) {
            $formFields['photo_4'] = $request->file('photo_4')->store('photos', 'public');
        }
        if($request->hasFile('photo_5')) {
            $formFields['photo_5'] = $request->file('photo_5')->store('photos', 'public');
        }
        if($request->hasFile('photo_6')) {
            $formFields['photo_6'] = $request->file('photo_6')->store('photos', 'public');
        }

        $listing->update($formFields);

        return redirect('/admin/listings')->with('message', 'Listing created successfully!');
    }

}
