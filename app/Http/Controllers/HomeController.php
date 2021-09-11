<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PerubahanStatus;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Dashboard";
        //$data = BeritaAcara::all();
        return view('home')->withTitle($title);
        //return view('home');
    }
}
