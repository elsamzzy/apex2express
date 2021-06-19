<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = "About Us | Apex2xpress";
        $description = "Learn more About us in and meet our esteemed staffs";
        return view('about', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
