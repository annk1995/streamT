<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadNavController extends Controller
{
   public function navupload(){
        return view('talent.navupload');
      }
}
