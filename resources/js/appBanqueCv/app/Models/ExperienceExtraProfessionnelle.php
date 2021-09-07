<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceExtraProfessionnelle extends Model
{
    use HasFactory;

    public function cv(){
        return $this->belongsTo(Cv::class);
    }

    protected $fillable = [
        'poste',
        'employeur',
        'ville',
        'date_debut',
        'date_fin',
        'description',
        'cv_id'
    ];
}
