<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    public function details(Track $track) {
        return $this->latest()->get()->where('tracks_id', $track->id);
    }

    public function lastUpdated(Track $track) {
        return $this->latest()->where('tracks_id', $track->id)->first();
    }
}
