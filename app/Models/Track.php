<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    /** @use HasFactory<\Database\Factories\TrackFactory> */
    use HasFactory;
     protected $guarded =  [];

     public function file() {
        return 'tracks/'.$this->song_id.'/'.$this->filename;
     }
}
