<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoriteVideos extends Model
{
    use HasFactory;
    public function video()
    {
        return $this->belongsTo(videos::class, 'video_id');
    }
}
