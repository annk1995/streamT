<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalentProfileController extends Controller
{
    public function talentprofile(){
        return view('talent.talentprofile');
      }
}
