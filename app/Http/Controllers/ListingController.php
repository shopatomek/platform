<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(Request $request)
    {

        return view('listings', [

            'listings' => Listing::latest()->get()
        ]);
    }

    public function show(Listing $id)
    {
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    }
}
