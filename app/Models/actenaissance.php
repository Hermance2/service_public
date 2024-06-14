<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actenaissance extends Model
{
    use HasFactory;

    protected $fillable = [
        'citoyens_id',
        'services_id',
        'nomdemandeur',
        'prenomdemandeur',
        'datenaissance',
        'lieunaissancance',
        'mere',
        'pere',
        'motif'
    ];

    
    public function citoyen()
    {
        return $this->belongsTo(Citoyen::class, 'citoyens_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id');
    }
}
