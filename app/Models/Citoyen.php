<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomCitoyen',
        'prenomCitoyen',
        'email',
        'numCIN',
        'telephone',
        'adresse',
    ];
    public function acteDeces()
    {
        return $this->hasMany(actedece::class, 'citoyens_id');
    }
}
