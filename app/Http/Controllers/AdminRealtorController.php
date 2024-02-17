<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminRealtorController extends Controller
{
    public function realtors() {
        return view('admin.realtors.list', [
            'realtors' => Realtor::all()
        ]);
    }

}
