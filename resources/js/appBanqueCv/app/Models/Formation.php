<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'formation',
        'etablissement',
        'ville',
        'date_debut',
        'date_fin',
        'description',
        'cv_id'
    ];
    public function cv(){
        return $this->belongsTo(Cv::class);
    }
}
