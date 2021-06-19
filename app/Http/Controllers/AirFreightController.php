<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirFreightController extends Controller
{
    public function index() {
        $title = "Air Freight | Apex2xpress";
        $description = "Everything you need to know about our top notch Air Freight";
        return view('airfreight', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
