<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $title = "Contact Us | Apex2Express";
        $description = "Please, contact our support and we would be sure to respond as quickly as possible";
        return view('contact', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function store(Request $request) {

    }
}
