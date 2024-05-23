<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeTalentController extends Controller
{
    public function talenthome(){
        return view('talent.talent');
      }
}
