<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public function competence(){

        return $this->hasMany(Competence::class);
        }
        public function formation(){
    
        return $this->hasMany(Formation::class);
        }
        public function experienceprofressionnelle(){
    
        return $this->hasMany(ExperienceProfessionelle::class);
        }
        public function experienceextraprofressionnelle(){
    
        return $this->hasMany(ExperienceExtraProfessionnelle::class);
        }
        public function centreinteret(){
    
        return $this->hasMany(CentreInteret::class);
        }
        public function langue(){
    
        return $this->hasMany(Langue::class);
        }
        public function technologieoutil(){
    
        return $this->hasMany(TechnologieOutil::class);
        }

        protected $fillable = [
            'nom_cv',
            'nom',
            'prenoms',
            'date_naissance',
            'lieu_naisssance',
            'type_profil',
            'email',
            'telephone1',
            'telephone2',
            'adresse',
            'photo',
        ];
        
}
