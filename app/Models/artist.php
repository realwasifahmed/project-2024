<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\musics;
use App\Models\videos;

class artist extends Model
{
    use HasFactory;
    protected $PrimaryKey = 'id';
    public function musics()
    {
        return $this->hasMany(musics::class);
    }

    public function videos()
    {
        return $this->hasMany(videos::class);
    }
}
