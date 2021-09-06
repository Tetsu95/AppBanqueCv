<?php

use App\Models\Cv;
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
//use App\Exports\Cv;

class CvExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cv::all();
    }
}
