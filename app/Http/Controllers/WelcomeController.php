<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use View;
use App\Country;

class WelcomeController extends Controller
{
    private $countries = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->countries = Country::all();
    }


    /**
     * Change the ISO
     *
     * @return \Illuminate\Http\Response
     */
    public function changeiso($currency)
    {
        $country = Country::where('currency',$currency)->first();

        if(!is_null($country)){
            Session::set('currency',$country->currency);
        }

        return redirect()->back();
    }

    /**
     * Shows main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('welcome')->with(array('countries'=>$this->countries));
    }
}
