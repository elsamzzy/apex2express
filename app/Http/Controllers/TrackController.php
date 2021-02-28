<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index() {
        $title = "Track Your Shipments | Apex2Express";
        $description = "Track your shipments and cargo and get detailed, accurate location status about them";
        return view('trackshipping', [
            'title' => $title,
            'description' => $description
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
           'tracking_id' => ['required', 'string']
        ]);

        $info = explode('_', $request['tracking_id']);

        if($data = Track::where('name', $info[0])->first()){
            if($data->id == $info[1]){
                return redirect()->route('details', $data);
            }
            return back()->with('fail', 'Tracking number does not exist in our record, Please contact your sender');
        }
        return back()->with('fail', 'Tracking number does not exist in our record, Please contact your sender');
    }
}
