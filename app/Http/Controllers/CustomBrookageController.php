<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomBrookageController extends Controller
{
    public function index() {
        return view('custom');
    }
}
