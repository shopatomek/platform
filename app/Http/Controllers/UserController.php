<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Walidacja danych - możesz dodać walidację tutaj przy użyciu $request->validate()

        // Zapis do bazy danych
        $user = new NewUser();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        // Przekierowanie po zapisie
        return redirect()->route('database.show')->with('status', 'User added successfully!');
    }
}
