<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index() {
        $title = "Services | Apex2xpress";
        $description = "View all our Services which makes us No1 in the world";
        return view('services', [
            'title' =>  $title,
            'description' => $description
        ]);
    }
}
