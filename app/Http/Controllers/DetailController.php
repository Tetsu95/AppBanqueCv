<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Cv;
use App\Models\TechnologieOutil;
use Illuminate\Http\Request;
use PDF;
class DetailController extends Controller
{
    public static function DetailBy($id){
        $liste=[];
        foreach (DB::table('cvs')->where('id',$id)->get() as $ps) {
            array_push($liste, Cv::findOrFail($ps->id));
        }
        return $liste;
    }
    public static function titre($id){
        $list=[];
        foreach (DB::table('technologie_outils')
                    ->join('cvs','technologie_outils.cv_id','=','cvs.id')
                    ->where('cvs.id',$id)->get() as $ps) {
            array_push($list, TechnologieOutil::findOrFail($ps->id));
        }
        return $list;
    }
    public static function getFormationAttribute(){
        $cv=Cv::all();
        return $cv->formation();
    }

     
}
