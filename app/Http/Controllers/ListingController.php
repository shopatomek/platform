<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    public function show(Listing $id)
    {
        return view('listing', [
            'listing' => Listing::find($id)
        ]);
    }
}
