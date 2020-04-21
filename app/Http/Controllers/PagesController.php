<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function frontend(){
        return view('layouts/frontend');
    }


    public function backend(){
        return view('layouts/backend');
    }


}
