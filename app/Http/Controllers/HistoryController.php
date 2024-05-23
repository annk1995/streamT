<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Body;
use App\Models\Country;
use App\Models\Ethnicity;
use App\Models\Fetish;
use App\Models\Preference;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history(){
        $types  = Body::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $preferences=Preference::orderBy('id')->get();
        $fetishes=Fetish::orderBy('id')->get();
        $ethnicities =Ethnicity::orderBy('id')->get();
        $ages=Age::orderBy('id')->get();
        return view('client.history.history',compact('types','countries','preferences','fetishes','ages','ethnicities'));
    }
}
