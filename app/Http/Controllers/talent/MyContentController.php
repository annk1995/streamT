<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyContentController extends Controller
{
    public function  mycontent(){
        return view('talent.mycontent');
    }
}
