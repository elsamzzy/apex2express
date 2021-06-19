<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = "Apex2xpress";
        $description = "Apex2express Shipping and Logistics Company, Tracking of Parcels and delivery all over the globe";
        return view('home', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
