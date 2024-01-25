<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\artist;

class videos extends Model
{
    use HasFactory;

    protected $PrimaryKey = 'id';
    public function artist()
    {
        return $this->belongsTo(artist::class);
    }

    public function favoritedByWhom()
    {
        return $this->belongsToMany(User::class, 'favorite_videos');
    }
}
