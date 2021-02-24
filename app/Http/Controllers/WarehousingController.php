<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehousingController extends Controller
{
    public function index() {
        return view('warehouses');
    }
}
