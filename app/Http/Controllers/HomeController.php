<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use View;
use App\Country;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $countries = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
        $this->countries = Country::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    
}
