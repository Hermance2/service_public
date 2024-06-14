<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actedece extends Model
{
    use HasFactory;

    protected $fillable = [
        'citoyens_id',
        'services_id',
        'nomdece',
        'prenomdece',
        'datedece',
        'lieu'
    ];
}
