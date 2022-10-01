<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        return view('home');
    }

    public function getAPICovid()
    {
        $response = Http::get('https://data.covid19.go.id/public/api/update.json');
        $jumlah = $response->json();
        return view('home', [
            'jumlah' => $jumlah
        ]);
    }
}
