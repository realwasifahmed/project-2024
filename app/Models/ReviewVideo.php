<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewVideo extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'userId'); // Corrected to 'userId'
    }

    // Define the relationship with the Music model
    public function video()
    {
        return $this->belongsTo(videos::class, 'videoid'); // Corrected to 'videoid'
    }
}
