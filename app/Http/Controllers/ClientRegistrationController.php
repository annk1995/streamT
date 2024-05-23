<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Body;
use App\Models\Country;
use App\Models\Ethnicity;
use App\Models\Fetish;
use App\Models\Preference;
use Database\Seeders\FetishSeed;
use Illuminate\Http\Request;

class ClientRegistrationController extends Controller
{
    public function clientregistration(){
        $types  = Body::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $preferences=Preference::orderBy('id')->get();
        $fetishes=Fetish::orderBy('id')->get();
        $ethnicities =Ethnicity::orderBy('id')->get();
        $ages=Age::orderBy('id')->get();
        return view('client.registration.clientregistartion',compact('types','countries','fetishes','preferences','ethnicities','ages'));
      }
}
