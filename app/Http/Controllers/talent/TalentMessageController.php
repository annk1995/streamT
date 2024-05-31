<?php

namespace App\Http\Controllers\talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalentMessageController extends Controller
{
    //
    public function talentmessage(){
        return view('talent.talentmessage');
      }
}
