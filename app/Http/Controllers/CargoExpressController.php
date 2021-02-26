<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoExpressController extends Controller
{
    public function index() {
        $title = "Cargo Express | Apex2Express";
        $description = "All about our Cargo Express and its best features";
        return view('cargoexpress', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
