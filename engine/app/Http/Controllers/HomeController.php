<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Inertia::share([
            'app' => [
                'name' => config('app.name'),
            ],
            'csrf_token' => csrf_token(),
            'currentUser' => \Auth::user(),
        ]);

        return Inertia::render('Dashboard');
    }
}