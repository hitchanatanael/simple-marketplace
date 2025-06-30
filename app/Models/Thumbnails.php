<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thumbnails extends Model
{
    protected $table = 'thumbnails';

    protected $fillable = ['nama', 'foto'];
}
