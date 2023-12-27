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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
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

        Listing::create($formpost);
        return redirect('/listings');
    }
}
