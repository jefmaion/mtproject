<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    /** @use HasFactory<\Database\Factories\SongFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded =  [];

    public function tracks() {
        return $this->hasMany(Track::class);
    }

    public function hasTracks() {
        return $this->tracks()->count() > 0;
    }


}
