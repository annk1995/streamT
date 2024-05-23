<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadvideo(){
        return view('talent.uploadvideo');
      }
}
