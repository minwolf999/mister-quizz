<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LeaderboardController extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT username, xp, art, geography, history, science, sports
        FROM users
        ORDER BY xp DESC
        LIMIT 10');

        return view('leaderboard', ['users' => $users]);
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }
}
