<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminListingController extends Controller
{
    public function listings() {
        return view('admin.listings.list', [
            'listings' => Listing::latest()->filter(request(['title']))
                                                ->paginate(20)
        ]);
    }

    public function create() {
        return view('admin.listings.create', [
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

        if($request->filled('is_published')) {
            $formFields['is_published'] = '1';
        } else {
            $formFields['is_published'] = '0';
        }

        Listing::create($formFields);

        return redirect('/admin/listings');
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
        ]);

        if($request->hasFile('photo_main')) {
            if($listing->photo_main && Storage::disk('public')->exists($listing->photo_main)) {
                Storage::disk('public')->delete($listing->photo_main);
            }
            $formFields['photo_main'] = $request->file('photo_main')->store('photos', 'public');
        }
        if($request->hasFile('photo_1')) {
            if($listing->photo_1 && Storage::disk('public')->exists($listing->photo_1)) {
                Storage::disk('public')->delete($listing->photo_1);
            }
            $formFields['photo_1'] = $request->file('photo_1')->store('photos', 'public');
        }
        if($request->hasFile('photo_2')) {
            if($listing->photo_2 && Storage::disk('public')->exists($listing->photo_2)) {
                Storage::disk('public')->delete($listing->photo_2);
            }
            $formFields['photo_2'] = $request->file('photo_2')->store('photos', 'public');
        }
        if($request->hasFile('photo_3')) {
            if($listing->photo_3 && Storage::disk('public')->exists($listing->photo_3)) {
                Storage::disk('public')->delete($listing->photo_3);
            }
            $formFields['photo_3'] = $request->file('photo_3')->store('photos', 'public');
        }
        if($request->hasFile('photo_4')) {
            if($listing->photo_4 && Storage::disk('public')->exists($listing->photo_4)) {
                Storage::disk('public')->delete($listing->photo_4);
            }
            $formFields['photo_4'] = $request->file('photo_4')->store('photos', 'public');
        }
        if($request->hasFile('photo_5')) {
            if($listing->photo_5 && Storage::disk('public')->exists($listing->photo_5)) {
                Storage::disk('public')->delete($listing->photo_5);
            }
            $formFields['photo_5'] = $request->file('photo_5')->store('photos', 'public');
        }
        if($request->hasFile('photo_6')) {
            if($listing->photo_6 && Storage::disk('public')->exists($listing->photo_6)) {
                Storage::disk('public')->delete($listing->photo_6);
            }
            $formFields['photo_6'] = $request->file('photo_6')->store('photos', 'public');
        }

        if($request->filled('is_published')) {
            $formFields['is_published'] = '1';
        } else {
            $formFields['is_published'] = '0';
        }

        $listing->update($formFields);

        return redirect('/admin/listings');
    }

    public function destroy(Listing $listing) {
        
        if($listing->photo_main && Storage::disk('public')->exists($listing->photo_main)) {
            Storage::disk('public')->delete($listing->photo_main);
        }
        if($listing->photo_1 && Storage::disk('public')->exists($listing->photo_1)) {
            Storage::disk('public')->delete($listing->photo_1);
        }
        if($listing->photo_2 && Storage::disk('public')->exists($listing->photo_2)) {
            Storage::disk('public')->delete($listing->photo_2);
        }
        if($listing->photo_3 && Storage::disk('public')->exists($listing->photo_3)) {
            Storage::disk('public')->delete($listing->photo_3);
        }
        if($listing->photo_4 && Storage::disk('public')->exists($listing->photo_4)) {
            Storage::disk('public')->delete($listing->photo_4);
        }
        if($listing->photo_5 && Storage::disk('public')->exists($listing->photo_5)) {
            Storage::disk('public')->delete($listing->photo_5);
        }
        if($listing->photo_6 && Storage::disk('public')->exists($listing->photo_6)) {
            Storage::disk('public')->delete($listing->photo_6);
        }
        $listing->delete();
        return redirect('/admin/listings');
    }

}
