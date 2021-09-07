<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologieOutil extends Model
{
    use HasFactory;

    public function cv(){
        return $this->belongsTo(Cv::class);
    }

    protected $fillable = [
        'nom',
        'description',
        'cv_id',
    ];
}
