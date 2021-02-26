<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomBrookageController extends Controller
{
    public function index() {
        $title = "Custom Brokerage | Apex2Express";
        $description = "Everything you need to know about our custom Brokerage service";
        return view('custom', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
