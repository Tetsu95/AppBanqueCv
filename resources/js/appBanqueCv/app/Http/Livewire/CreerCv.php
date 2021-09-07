<?php

namespace App\Http\Livewire;

use App\Http\Controllers\fileController;
use App\Models\CentreInteret;
use App\Models\Competence;
use App\Service\SearchCv;
use App\Models\Cv;
use App\Models\ExperienceExtraProfessionnelle;
use App\Models\ExperienceProfessionelle;
use App\Models\Formation;
use App\Models\Langue;
use App\Models\TechnologieOutil;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class CreerCv extends Component
{
    //public $allCv=[];
    // public $orderFormation=[];
    use WithFileUploads;
    //recupère les valeurs de la table formations saisi dans le formulaire
    public $Newformation=[];

    // recupère les valuiers de la table informationnel personnel (cvs) saisi dans le formulaire
    public $nom_cv,$nom,$prenoms, $date_naissance, $lieu_naissance,$type_profil, $email, $telephone1, $telephone2,
    $adresse, $photo;

    // recupère les Attributs de la table Experience professionlle saisi dans le formulaire
    public $poste,$employeur, $ville_experience,$date_debut_experience,$date_fin_experience, $cv_id_experience, $description_experience;

    // recupère les Attributs de la table Experience Extra professionlle saisi dans le formulaire
    public $poste_experience_extra,$employeur_experience_extra, $ville_experience_extra,$date_debut_experience_extra,$date_fin_experience_extra, $cv_id_experience_extra, $description_experience_extra;

    // recupère les Attributs de la table competence saisi dans le formulaire
    public $nom_competence,$cv_id_competence;

    // recupère les Attributs de la table technologie et outils saisi dans le formulaire
    public $nom_technologie,$description_technologie,$cv_id_technologie;

    // recupère les Attributs de la table technologie et outils saisi dans le formulaire
    public $nom_langue,$niveau_langue,$cv_id_langue;

    // recupère les Attributs de la table centre et interet saisi dans le formulaire
    public $nom_centre,$cv_id_centre;

    //tableau pour reinitialiser les valeurs saisi dans le formulaire vapres la validation
    public $variables = array('nom_cv', 'nom', 'prenoms', 'date_naissance','lieu_naissance','type_profil',
    'email','telephone1','telephone2','adresse','photo');
    //tableau pour reinitialiser les valeurs saisi dans le formulaire vapres la validation
    public $variablesEx = array('poste', 'employeur', 'ville_experience', 'date_debut_experience','date_fin_experience','description_experience');

    //tableau pour reinitialiser les valeurs saisi dans le formulaire vapres la validation
        public $variablesExtra = array('poste_experience_extra', 'employeur_experience_extra', 'ville_experience_extra', 'date_debut_experience_extra','date_fin_experience_extra','description_experience_extra');

    public $NewCv=[];

    protected $rules = [
        'Newformation.formation'=>'required',
        'Newformation.etablissement'=>'required',
        'Newformation.ville'=>'required',
        'Newformation.date_debut'=>'required',
        'Newformation.date_fin'=>'required',
        'Newformation.cv_id'=>'required',
    ];
    protected $message=[
        'photo'=>"photo non selectionnée",
    ];

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:10240',
        ]);
    }

    public function render()
    {
        return view('livewire.creer-cv', [
            'allCv'=>SearchCv::form()
        ])
                ->extends('layouts.master')
                ->section('contenu');
    }

    public function AddFormation(){
        
        //verifions que les informations sont correctes
        $validationAttributes=$this->validate();

        //validation des champs
         Formation::create($validationAttributes["Newformation"]);
        $this->Newformation= [];
        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=> "Formation Ajoutée avec succès"]);

    }
    public function AddCv(){
        $this->validate([
            'nom'=>'required',
            'telephone1'=>'|required|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 1MB Max
        ]);
        $cv= new Cv();
        $cv->nom_cv=$this->nom_cv;
        $cv->nom=$this->nom;
        $cv->prenoms=$this->prenoms;
        $cv->date_naissance=$this->date_naissance;
        $cv->lieu_naissance=$this->lieu_naissance;
        $cv->type_profil=$this->type_profil;
        $cv->email=$this->email;
        $cv->telephone1=$this->telephone1;
        $cv->telephone2=$this->telephone2;
        $cv->adresse=$this->adresse;
        $cv->photo= $this->photo->store('images','public');
        $cv->save();
       
        foreach($this->variables as $v){
            $this->$v="";
        }
        $this->dispatchBrowserEvent("showSuccessMessageInformation", ["message"=> "Information personnel Ajouter avec Succès"]);
    }
    public function AddExperiencePro(){
        if (!empty($this->poste) && !empty($this->employeur) && !empty($this->ville_experience) && !empty($this->date_debut_experience) && !empty($this->date_fin_experience) && !empty($this->cv_id_experience)) {
            $exp= new ExperienceProfessionelle();
            $exp->poste= $this->poste;
            $exp->employeur= $this->employeur;
            $exp->ville= $this->ville_experience;
            $exp->date_debut= $this->date_debut_experience;
            $exp->date_fin= $this->date_fin_experience;
            $exp->description= $this->description_experience;
            $exp->cv_id= $this->cv_id_experience;
            
            $exp->save();

            foreach($this->variablesEx as $v){
                $this->$v="";
            }
        }
        $this->dispatchBrowserEvent("showSuccessMessageExperience", ["message"=> "Experience Professionnelle Ajouter avec Succès"]);
        

    }

    public function AddExperienceExtraPro(){
        if (!empty($this->poste_experience_extra) && !empty($this->employeur_experience_extra) && !empty($this->ville_experience_extra) && !empty($this->date_debut_experience_extra) && !empty($this->date_fin_experience_extra) && !empty($this->cv_id_experience_extra)) {
            $expEtra= new ExperienceExtraProfessionnelle();
            $expEtra->poste= $this->poste_experience_extra;
            $expEtra->employeur= $this->employeur_experience_extra;
            $expEtra->ville= $this->ville_experience_extra;
            $expEtra->date_debut= $this->date_debut_experience_extra;
            $expEtra->date_fin= $this->date_fin_experience_extra;
            $expEtra->description= $this->description_experience_extra;
            $expEtra->cv_id= $this->cv_id_experience_extra;
            
            $expEtra->save();

            foreach($this->variablesExtra as $v){
                $this->$v="";
            }
        }

        $this->dispatchBrowserEvent("showSuccessMessageExtra", ["message"=> "Experience Extra Professionnelle Ajoutée avec Succès"]);
        

    }

    //fonction pour ajouter des competences
    public function AddCompetence(){
        if (!empty($this->nom_competence) && !empty($this->cv_id_competence)) {
           $competence= new Competence();
           $competence->nom_competence= $this->nom_competence;
           $competence->cv_id= $this->cv_id_competence;

           $competence->save();

           $this->nom_competence="";

        }
        $this->dispatchBrowserEvent("showSuccessMessageCompetence", ["message"=> "Competence Ajouté avec Succès"]);
    }

    //fonction pour ajouter technologie et outils
    public function AddTechnologie(){
        if (!empty($this->nom_technologie) && !empty($this->description_technologie) && !empty($this->cv_id_technologie)) {
            $technologie= new TechnologieOutil();
            $technologie->nom= $this->nom_technologie;
            $technologie->description= $this->description_technologie;
            $technologie->cv_id= $this->cv_id_technologie;
 
            $technologie->save();
 
            $this->nom_technologie="";
            $this->description_technologie="";
 
         }
         $this->dispatchBrowserEvent("showSuccessMessageTechnologie", ["message"=> "technologie Ajouté avec Succès"]);
    }

    //fonction pour ajouter la langues
    public function AddLangue(){
        if (!empty($this->nom_langue) && !empty($this->niveau_langue) && !empty($this->cv_id_langue)) {
            $langue= new Langue();
            $langue->nom= $this->nom_langue;
            $langue->niveau= $this->niveau_langue;
            $langue->cv_id= $this->cv_id_langue;
 
            $langue->save();
 
            $this->nom_langue="";
            $this->niveau_langue="";
 
         }
         $this->dispatchBrowserEvent("showSuccessMessageLangue", ["message"=> "Langue Ajoutée avec Succès"]);
    }

    //fonction pour ajouter des centres d'interet
    public function AddCentre(){
        if (!empty($this->nom_centre) && !empty($this->cv_id_centre)) {
           $Centre= new CentreInteret();
           $Centre->nom= $this->nom_centre;
           $Centre->cv_id= $this->cv_id_centre;

           $Centre->save();

           $this->nom_centre="";

        }
        $this->dispatchBrowserEvent("showSuccessMessagecentre", ["message"=> "Centre d'interet Ajouté avec Succès"]);
    }
}
