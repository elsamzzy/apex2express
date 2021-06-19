<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        $title = "Contact Us | Apex2xpress";
        $description = "Please, contact our support and we would be sure to respond as quickly as possible";
        return view('contact', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255']
        ]);

        Mail::to(config('mail.from.address'))->send(new Contact($request));

        return back()->with('sent', 'Successfully sent your message');
    }
}
