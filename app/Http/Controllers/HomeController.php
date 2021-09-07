<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        return view("livewire.home");
    }

    public function search(){
        return view("search");
    }

    public function searchCv(){
        $q= request()->input('search');

        $cvs= Cv::where('nom_cv','like', "%$q%")
                ->orWhere('nom','like', "%$q%")
                ->paginate(2);
        return view('ViewSearch')->with('cvs',$cvs);
    }

    public function goEdit($id){
        session(['cv'=> $id]);
        return redirect('/editCv');
    }
}
