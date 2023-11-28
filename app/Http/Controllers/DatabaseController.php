<?php

namespace App\Http\Controllers;

use App\Models\NewUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DatabaseController extends Controller
{
    public function show()
    {
        $usersCount = NewUser::count();
        $users = NewUser::select('name', 'email')->get();  // Pobranie liczby użytkowników
        // Tutaj można dodać logikę potrzebną do wyświetlenia widoku 'database'
        // Na przykład przekazanie danych do widoku, jeśli jest potrzebne
        // $data = ...

        // Zwrócenie widoku 'database'
        // return View::make('database');
        return view('database', [
            'usersCount' => $usersCount,
            'users' => $users,
        ]);
    }
}
