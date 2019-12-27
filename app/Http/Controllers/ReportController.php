<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;
use App\report;
class ReportController extends Controller
{
    //
    public function data($startTime,$endTime){
    
        $data =report::select("rp_dsp_daily_datastudio.*")->whereBetween('data_time',[$startTime,$endTime])->get();
        
        return new JsonResponse ([
            'data'=>$data,
        ]);
    }
}
