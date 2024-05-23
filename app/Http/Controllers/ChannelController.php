<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Body;
use App\Models\Country;
use App\Models\Ethnicity;
use App\Models\Fetish;
use App\Models\Preference;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function userchannels(){
       $types  = Body::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $preferences=Preference::orderBy('id')->get();
        $fetishes=Fetish::orderBy('id')->get();
        $ethnicities =Ethnicity::orderBy('id')->get();
        $ages=Age::orderBy('id')->get();
        return view('client.channels.channels',compact('types','countries','fetishes','preferences','ethnicities','ages'));
    }
}
