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
    /**
     * Change the ISO
     *
     * @return \Illuminate\Http\Response
     */
    public function changeiso($iso)
    {
        $iso = Country::where('iso',$iso)->first();

        if(!is_null($iso)){
            Session::set('iso',$iso->iso);
        }

        return redirect()->back();
    }
}
