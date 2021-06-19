<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehousingController extends Controller
{
    public function index() {
        $title = "Warehousing | Apex2xpress";
        $description = "Know more about our safe and secured warehouses and their locations";
        return view('warehouses', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
