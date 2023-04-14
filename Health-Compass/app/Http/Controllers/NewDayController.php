<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewDayController extends Controller
{
    public function show() {
        return view('newDay');
    }
}
