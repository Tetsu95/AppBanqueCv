<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DetailController;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\CvExports;
use App\Models\Cv;
use Maatwebsite\Excel\Facades\Excel;
use App\Service\SearchCv;
use Livewire\Component;
use Barryvdh\DomPDF\Facade;
use PDF;
class Detail extends Component
{
    
    //public $listDetail=[];
   public $titre=["formation"=>"Technologies et outils", "centre"=>"Centre d'interet"];
    public $ids=[];
    public $tab=[];
    // public function mount(){
    //      $this->listDetail =
    //      dd($this->listDetail);
    //     foreach ($this->listDetail as $value) {
    //         $this->tab['nom'] = $value->nom;
    //     }
    // }
    public function render()
    {
        return view('livewire.detail',[
            'listDetail' => DetailController::DetailBy(session('cv'))
        ])
        ->extends('layouts.master')
        ->section('contenu');
    }

    public function export($exl){
        return Excel::download(new CvExports, 'cvs.pdf');
    }

    // public function createPDF(){
    //     $cv=Cv::all();
    //     view()->share('/detail',$cv);
    //     $pdf= PDF::loadView('pdf_view',$cv);
    // }

    public function Telecharger(){
        $pdf = PDF::loadView('pdf');
        // dd($pdf);
        // dd('ok');
        return $pdf->stream();
    }
}
