<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\Business;
use Auth;

class BusinessController extends Controller
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
     * Shows main business page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->business == NULL)
            return redirect()->route('home');

        $business = Business::find(Auth::user()->business);
        return $business;
    }
    /**
     * Show the business register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showform()
    {
        if(Auth::user()->business == NULL)
            $business = [];
        else
            return redirect()->route('business.edit');
            

        return view('business.create',array('countries'=>$this->countries,'business'=>$business));
    }

    /**
     * Show the business edit form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showedit()
    {
        if(Auth::user()->business == NULL)
            return redirect()->route('business.create');
        else
            $business = Business::find(Auth::user()->business);

        return view('business.edit',array('countries'=>$this->countries,'business'=>$business));
    }


    /**
     * Saves the business register form.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerbusiness(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'website' => 'url|required'
        ]);

        $flag = 0;
        if(Auth::user()->business == NULL){
            $flag = 1;
            $business = new Business;
        }
        else
            $business = Business::find(Auth::user()->business);

        $business->name = $request->input('name');
        $business->email = $request->input('email');
        $business->website = $request->input('website');
        $business->description = $request->input('description');
        $business->country = $request->input('country');
        $business->phone = $request->input('phone');
        $business->city = $request->input('city');
        $business->owner = Auth::user()->id;
        $business->save();

        $user = Auth::user();
        $user->business = $business->id;
        $user->save();
        if($flag==0)
            return redirect()->route('business.edit')->with('status','Succesfully Updated!');
        else
            return redirect()->route('business.show');

    }
}
