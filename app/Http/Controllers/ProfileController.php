<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth()->user();

        //variables that will be used to display user score in each category
        $art = [];
        $geography = [];
        $history = [];
        $science = [];
        $sports = [];

        return view('profile', ['art' => $art, 'geography' => $geography, 'history' => $history, 'science' => $science, 'sports' => $sports]);
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }
}
