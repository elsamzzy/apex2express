<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Track;
use App\Models\User;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Detail $details, Track $track, User $user) {
        $name = $track->name;
        $title =  $name . " | Apex2xpress";
        $description = "Track your shipments and cargo and get detailed, accurate location status about them";
        $user = $user->User($track->user_id);
        return view('details', [
            'title' => $title,
            'description' => $description,
            'details' => $details->details($track),
            'track' => $track,
            'user' => $user,
            'updated' => $details->lastUpdated($track)->created_at,
            'status' => $details->status($track)
        ]);
    }
}
