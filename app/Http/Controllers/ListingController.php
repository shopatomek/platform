<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {

        return view('listings', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
}
