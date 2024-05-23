<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use App\Models\Age;
use App\Models\Body;
use App\Models\Country;
use App\Models\Ethnicity;
use App\Models\Fetish;
use App\Models\Gender;
use App\Models\Preference;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TalentRegisterController extends Controller
{
    public function talentregistration(){
        $types  = Body::orderBy('id')->get();
        $countries = Country::orderBy('id')->get();
        $preferences=Preference::orderBy('id')->get();
        $fetishes=Fetish::orderBy('id')->get();
        $ethnicities =Ethnicity::orderBy('id')->get();
        $ages=Age::orderBy('id')->get();
        $genders=Gender::orderBy('id')->get();

        return view('talent.talentregistration',compact('types','countries','preferences','ethnicities','genders','ages'));
      }


      public function store(Request $request)
      {
        ($request->all());
          // Validate the request data
          $validatedData = $request->validate([
            'username' => 'required|string|max:255',


            'fname' => 'required|string|max:255',

            'lname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dob' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:talents',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'identification_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'face_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'password' => 'required|string|min:8|confirmed',
            'confirmpassword' => 'required|string|min:8|confirmed',
            'type_id' => 'required|integer',
            'country_id' => 'required|integer',


            'ethnicity_id' => 'required|integer',
            'age_id' => 'required|integer',
            'gender_id' => 'required|integer'

          ]);
          if ($request->hasFile('profile_picture')) {
            $profilePath = $request->file('profile_picture')->store('public/profile_pictures');
            $validatedData['profile_picture'] = basename($profilePath);
        }

        if ($request->hasFile('identification_picture')) {
            $idPath = $request->file('identification_picture')->store('public/identification_pictures');
            $validatedData['identification_picture'] = basename($idPath);
        }

        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create a new talent record
        Talent::create($validatedData);




        return redirect()->route('talent.talentregistration')->with('success', 'Talent registered successfully!');



          }

}

