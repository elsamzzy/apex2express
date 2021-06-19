<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OceanFreightController extends Controller
{
    public function index() {
        $title = "Ocean Freight | Apex2xpress";
        $description = "Get more insight about our top quality Ocean Freight";
        return view('oceanfreight', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
