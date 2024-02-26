<?php

namespace App\Http\Controllers;

use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminRealtorController extends Controller
{
    public function realtors() {
        return view('admin.realtors.list', [
            'realtors' => Realtor::latest()->filter(request(['name']))
                                                ->paginate(20)
        ]);
    }

    public function create() {
        return view('admin.realtors.create');
    }


    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email' => ['required', 'email', Rule::unique('realtors', 'email')],
            'phone' => 'required',
        ]);

        if($request->filled('is_mvp')) {
            $formFields['is_mvp'] = '1';
        } else {
            $formFields['is_mvp'] = '0';
        }

        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Realtor::create($formFields);

        return redirect('/admin/realtors');
    }

    public function edit(Realtor $realtor) {
        return view('admin.realtors.edit', [
            'realtor' => $realtor
        ]);
    }

    public function update(Request $request, Realtor $realtor) {

        if(!($request->email == $realtor->email)) {
            $formFields = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'email' => ['required', 'email', Rule::unique('realtors', 'email')],
                'phone' => 'required',
            ]);
        } else {
            $formFields = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'email' => 'required', 'email',
                'phone' => 'required',
            ]);
        }


        if($request->hasFile('photo')) {
            if($realtor->photo && Storage::disk('public')->exists($realtor->photo)) {
                Storage::disk('public')->delete($realtor->photo);
            }

            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        if($request->filled('is_mvp')) {
            $formFields['is_mvp'] = '1';
        } else {
            $formFields['is_mvp'] = '0';
        }
        

        $realtor->update($formFields);

        return redirect('/admin/realtors')->with('message', 'Listing created successfully!');
    }

    public function destroy(Realtor $realtor) {
        
        if($realtor->photo && Storage::disk('public')->exists($realtor->photo)) {
            Storage::disk('public')->delete($realtor->photo);
        }
        $realtor->delete();
        return redirect('/admin/realtors');
    }

}
