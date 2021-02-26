<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index() {
        $title = "Track Your Shipments | Apex2Express";
        $description = "Track your shipments and cargo and get detailed, accurate location status about them";
        return view('trackshipping', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function store(Request $request) {

    }
}
