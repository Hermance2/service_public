<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_service',
        'lieu'
    ];

    public function acteDeces(){
        return $this->hasMany(actedece::class, 'services_id');
    }
}
