<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DetailController;
use App\Models\CentreInteret;
use App\Models\Competence;
use App\Models\Cv;
use App\Models\ExperienceExtraProfessionnelle;
use App\Models\ExperienceProfessionelle;
use App\Models\Formation;
use App\Models\Langue;
use App\Models\TechnologieOutil;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ModifierCv extends Component
{
    use WithFileUploads;
    public $ids, $nom_cv, $nom, $prenoms, $date_naissance, $lieu_naissance, $type_profil, $email, $telephone1,
    $telephone2, $adresse, $photo;

    public $idss, $formation, $etablissement, $ville, $date_debut, $date_fin, $description, $cv_id;

    public $idExp, $poste, $employeur, $villeExp, $date_debutExp, $date_finExp, $descriptionExp, $cv_idExp;

    public $idExtra, $posteExtra, $employeurExtra, $villeExtra, $date_debutExtra, $date_finExtra, $descriptionExtra, $cv_idExtra;

    public $competence, $cv_idCompetence, $idCompetence;

    public $nomLangue, $niveau, $idLangue, $cv_idLangue;

    public $nomCentre, $cv_idCentre, $idCentre;

    public $nomTechnologie, $descriptionTechnologie, $idTechnologie, $cv_idtechnologie;

    public $editCv= [];
    public $form= [];
    public $iscliked=false;
    public $isClikedExpeExtra=false;
    public $isClikedExpe=false;
    public $isClikedCompetence=false;
    public $isClikedLangue=false;
    public $isClikedCentre=false;
    public $isClikedTechnologie=false;
    public $EditForm= [];
    public function mount(){
        $editCv=Cv::find(session('cv'));
        $this->ids=$editCv->id;
        $this->nom_cv=$editCv->nom_cv;
        $this->nom=$editCv->nom;
        $this->prenoms=$editCv->prenoms;
        $this->date_naissance=$editCv->date_naissance;
        $this->lieu_naissance=$editCv->lieu_naissance;
        $this->type_profil=$editCv->type_profil;
        $this->email=$editCv->email;
        $this->telephone1=$editCv->telephone1;
        $this->telephone2=$editCv->telephone2;
        $this->adresse=$editCv->adresse;
        $this->photo=$editCv->photo;
    }
    public function render()
    {
        return view('livewire.modifier-cv',[
            'editListe'=> DetailController::DetailBy(session('cv'))
        ])
                ->extends('layouts.master')
                ->section('contenu');

    }

    public function goEditFormation($id){
        $this->iscliked=true;
        $for=Formation::findOrFail($id);
        $this->idss=$for->id;
        $this->formation=$for->formation;
        $this->etablissement=$for->etablissement;
        $this->ville=$for->ville;
        $this->date_debut=$for->date_debut;
        $this->date_fin=$for->date_fin;
        $this->description=$for->description;
        $this->cv_id=$for->cv_id;
    }

    public function goEditExperience($id){
        $this->isClikedExpe=true;
        $expe=ExperienceProfessionelle::findOrFail($id);
        $this->idExp=$expe->id;
        $this->poste=$expe->poste;
        $this->employeur=$expe->employeur;
        $this->villeExp=$expe->ville;
        $this->date_debutExp=$expe->date_debut;
        $this->date_finExp=$expe->date_fin;
        $this->descriptionExp=$expe->description;
        $this->cv_idExp=$expe->cv_id;
    }

    public function goEditExperienceExtra($id){
        $this->isClikedExpeExtra=true;
        $expExtra=ExperienceExtraProfessionnelle::findOrFail($id);
        $this->idExtra=$expExtra->id;
        $this->posteExtra=$expExtra->poste;
        $this->employeurExtra=$expExtra->employeur;
        $this->villeExtra=$expExtra->ville;
        $this->date_debutExtra=$expExtra->date_debut;
        $this->date_finExtra=$expExtra->date_fin;
        $this->descriptionExtra=$expExtra->description;
        $this->cv_idExtra=$expExtra->cv_id;
    }

    public function goEditCompetence($id){
        $this->isClikedCompetence=true;
        $comp=Competence::findOrFail($id);
        $this->idCompetence=$comp->id;
        $this->competence=$comp->nom_competence;
        $this->cv_idCompetence=$comp->cv_id;
    }

    public function goEditLangue($id){
        $this->isClikedLangue=true;
        $langue=Langue::findOrFail($id);
        $this->idLangue=$langue->id;
        $this->nomLangue=$langue->nom;
        $this->niveau=$langue->niveau;
        $this->cv_idLangue=$langue->cv_id;
    }

    public function goEditCentre($id){
        $this->isClikedCentre=true;
        $cent=CentreInteret::findOrFail($id);
        $this->idCentre=$cent->id;
        $this->nomCentre=$cent->nom;
        $this->cv_idCentre=$cent->cv_id;
    }

    public function goEditTechnologie($id){
        $this->isClikedTechnologie=true;
        $techn=TechnologieOutil::findOrFail($id);
        $this->idTechnologie=$techn->id;
        $this->nomTechnologie=$techn->nom;
        $this->descriptionTechnologie=$techn->description;
        $this->cv_idtechnologie=$techn->cv_id;
    }

    public function retourTechnologie(){
        $this->isClikedTechnologie=false;
    }

    public function retourLangue(){
        $this->isClikedLangue=false;
    }

    public function retourCentre(){
        $this->isClikedCentre=false;
    }

    public function retour(){
        $this->iscliked=false;
    }
    public function retourExp(){
        $this->isClikedExpe=false;
    }
    public function retourExtra(){
        $this->isClikedExpeExtra=false;
    }
    public function retourCompetence(){
        $this->isClikedCompetence=false;
    }


    public function UpdateInformationPersonnel(){
        $validateDate=$this->validate([
            'nom'=>'required',
            'nom_cv'=>'required',
            'prenoms'=>'required',
            'type_profil'=>'required',
            'adresse'=>'required',
            'email'=>['required','telephone1',ValidationRule::unique("cvs","telephone1")->ignore($this->ids)],
            'email'=>['required','email',ValidationRule::unique("cvs","email")->ignore($this->ids)],
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // 1MB Max
        ]);
        if ($this->ids) {
            $cv=Cv::find(session('cv'));
            $pho= $this->photo->store('images','public');
            $cv->update([
                'nom_cv'=>$this->nom_cv,
                'nom'=>$this->nom,
                'prenoms'=>$this->prenoms,
                'date_naissance'=>$this->date_naissance,
                'lieu_naissance'=>$this->lieu_naissance,
                'type_profil'=>$this->type_profil,
                'email'=>$this->email,
                'telephone1'=>$this->telephone1,
                'telephone2'=>$this->telephone2,
                'adresse'=>$this->adresse,
                'photo'=>$pho,
            ]);
        }
    }

    public function UpdateFormation(){
        $validateDate=$this->validate([
            'formation'=>'required',
            'etablissement'=>'required',
            'ville'=>'required',
            'date_debut'=>'required',
            'date_fin'=>'required',
            
        ]);
        if ($this->idss) {
            $forma=Formation::findOrFail($this->idss);
            $forma->update([
                'formation'=>$this->formation,
                'etablissement'=>$this->etablissement,
                'ville'=>$this->ville,
                'date_debut'=>$this->date_debut,
                'date_fin'=>$this->date_fin,
                'description'=>$this->description,
                'cv_id'=>$this->cv_id,
            ]);
            $this->iscliked=false;
        }
    }

    public function UpdateExperiencePro(){
        $validateDate=$this->validate([
            'poste'=>'required',
            'employeur'=>'required',
            'villeExp'=>'required',
            'date_debutExp'=>'required',
            'date_finExp'=>'required',
            
        ]);
        if ($this->idExp) {
            $exp=ExperienceProfessionelle::findOrFail($this->idExp);
            $exp->update([
                'poste'=>$this->poste,
                'employeur'=>$this->employeur,
                'ville'=>$this->villeExp,
                'date_debut'=>$this->date_debutExp,
                'date_fin'=>$this->date_finExp,
                'description'=>$this->descriptionExp,
                'cv_id'=>$this->cv_idExp,
            ]);
            $this->isClikedExpe=false;
        }
    }

    public function UpdateExperienceExtra(){
        $validateDate=$this->validate([
            'posteExtra'=>'required',
            'employeurExtra'=>'required',
            'villeExtra'=>'required',
            'date_debutExtra'=>'required',
            'date_finExtra'=>'required',
            
        ]);
        if ($this->idExtra) {
            $expExtra=ExperienceExtraProfessionnelle::findOrFail($this->idExtra);
            $expExtra->update([
                'poste'=>$this->posteExtra,
                'employeur'=>$this->employeurExtra,
                'ville'=>$this->villeExtra,
                'date_debut'=>$this->date_debutExtra,
                'date_fin'=>$this->date_finExtra,
                'description'=>$this->descriptionExtra,
                'cv_id'=>$this->cv_idExtra,
            ]);
            $this->isClikedExpeExtra=false;
        }
    }

    public function UpdateCompetence(){
        $validateDate=$this->validate([
            'competence'=>'required',
            
        ]);
        if ($this->idCompetence) {
            $compe=Competence::findOrFail($this->idCompetence);
            $compe->update([
                'nom_competence'=>$this->competence,
                'cv_id'=>$this->cv_idCompetence,
            ]);
            $this->isClikedCompetence=false;
        }
    }

    public function UpdateLangue(){
        $validateDate=$this->validate([
            'nomLangue'=>'required',
            
        ]);
        if ($this->idLangue) {
            $lang=Langue::findOrFail($this->idLangue);
            $lang->update([
                'nom'=>$this->nomLangue,
                'niveau'=>$this->niveau,
                'cv_id'=>$this->cv_idLangue,
            ]);
            $this->isClikedLangue=false;
        }
    }

    public function UpdateCentre(){
        $validateDate=$this->validate([
            'nomCentre'=>'required',
            
        ]);
        if ($this->idCentre) {
            $centre=CentreInteret::findOrFail($this->idCentre);
            $centre->update([
                'nom'=>$this->nomCentre,
                'cv_id'=>$this->cv_idCentre,
            ]);
            $this->isClikedCentre=false;
        }
    }

    public function Updatetechnologie(){
        $validateDate=$this->validate([
            'nomTechnologie'=>'required',
            
        ]);
        if ($this->idTechnologie) {
            $Techno=TechnologieOutil::findOrFail($this->idTechnologie);
            $Techno->update([
                'nom'=>$this->nomTechnologie,
                'description'=>$this->descriptionTechnologie,
                'cv_id'=>$this->cv_idtechnologie,
            ]);
            $this->isClikedTechnologie=false;
        }
    }



    public function DeleteCentre($id){
        if($id)
        {
            $deletecentre = CentreInteret::where('id',$id);
            $deletecentre->delete();
            $Liste = CentreInteret::all();
            $centre = new CentreInteret();
        }
    }

    public function DeleteCompetence($id){
        if($id)
        {
            $deletecempetence = Competence::where('id',$id);
            $deletecempetence->delete();
            $ListeC = Competence::all();
            $comp = new CentreInteret();
        }
    }

    public function DeleteExperienceExtra($id){
        if($id)
        {
            $deleteExperienceExtra = ExperienceExtraProfessionnelle::where('id',$id);
            $deleteExperienceExtra->delete();
            $ListeExperienceExtra = ExperienceExtraProfessionnelle::all();
            $ExperienceExtra = new ExperienceExtraProfessionnelle();
        }
    }

    public function DeleteExperience($id){
        if($id)
        {
            $deleteExperience = ExperienceProfessionelle::where('id',$id);
            $deleteExperience->delete();
            $ListeExperience = ExperienceProfessionelle::all();
            $Experience = new ExperienceProfessionelle();
        }
    }

    public function Deletetechnologie($id){
        if($id)
        {
            $deleteExperience = ExperienceProfessionelle::where('id',$id);
            $deleteExperience->delete();
            $ListeExperience = ExperienceProfessionelle::all();
            $Experience = new ExperienceProfessionelle();
        }
    }

    public function DeleteFormation($id){
        if($id)
        {
            $deleteFormation = Formation::where('id',$id);
            $deleteFormation->delete();
            $ListeExperience = Formation::all();
            $Experience = new Formation();
        }
    }

    public function DeleteLangue($id){
        if($id)
        {
            $deleteLangue = Langue::where('id',$id);
            $deleteLangue->delete();
            $ListeExperience = Langue::all();
            $Experience = new Langue();
        }
    }
    
}
