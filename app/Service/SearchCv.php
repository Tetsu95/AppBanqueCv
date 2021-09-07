<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
use App\Models\Cv;

class SearchCv
{

    public static function searcheByName(string $name){
            return Cv::where('nom_cv', $name)
                    ->orWhere('prenoms', $name)
                    ->get();
    }
    public static function titre(){
        return $data=[
            'formation' => "Formation"
        ];
    }
    public static function form(){
        return $cv=DB::select('select * from cvs order by created_at DESC limit 1');
    }

}




