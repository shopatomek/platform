<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index()
    {

        return view('listings', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(5)
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $formpost = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formpost['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formpost);
        return redirect('/listings');
    }

    // Show Form on edit
    public function edit(Listing $listing)
    {

        return view('edit', ['listing' => $listing]);
    }
}
