<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function create() {
        return view('listings.create', [
            'realtors' => Realtor::all()
        ]);
    }


    public function store(Request $request) {
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

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function search(Request $request) {

        return view('listings.search', [
            'listings' => Listing::latest()->filter(request(['state']))
                                           ->filter(request(['city']))
                                           ->filter(request(['bedrooms']))
                                           ->filter(request(['price']))
                                           ->paginate(6)
        ]);
    }
}
