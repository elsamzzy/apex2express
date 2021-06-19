<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticsController extends Controller
{
    public function index() {
        $title = "Logistics | Apex2xpress";
        $description = "Know more about our logistics services here at Apex2Express";
        return view('logistics', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
