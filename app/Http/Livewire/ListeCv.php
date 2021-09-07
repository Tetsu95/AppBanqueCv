<?php

namespace App\Http\Livewire;

use App\Models\Cv;
use Livewire\Component;
use App\Service\SearchCv;

class ListeCv extends Component
{
    public $name;
    public $search="";
    public $btnClik=false;
    public function render()
    {
        return view('livewire.liste-cv',[
            'cv' => Cv::where('nom_cv',$this->search)
                        ->orWhere('prenoms',$this->search)
                        ->get(),
        ])
        ->extends('layouts.master')
        ->section('contenu');
    }
    public function goDetail($id)
    {
        session(['cv'=> $id]);
        $this->redirect('/detail');
    }
}
