<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

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
