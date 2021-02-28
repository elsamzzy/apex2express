<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Track;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Detail $details, Track $track) {
        $name = $track->name;
        $title =  $name . " | Apex2Express";
        $description = "Track your shipments and cargo and get detailed, accurate location status about them";
        return view('details', [
            'title' => $title,
            'description' => $description,
            'details' => $details->details($track),
            'track' => $track,
            'updated' => $details->lastUpdated($track)->created_at
        ]);
    }
}
