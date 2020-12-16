<?php

namespace App\Http\Controllers;

use App\Traffic;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CostController extends Controller
{
    //string $month
    public function index(int $id)
    {
        // $date = Traffic::all(date('Y年m月',  strtotime('created_at')));
        $traffics = Traffic::all(); 
        // $date = Traffic::select('created_at')->format('Y年m月')->get();
        // $traffic_lists = Carbon::parse($date)->format('Y年m月');
        // $date->format('Y年m月');



        //$month = strtotime($month);
        //$traffic_lists = Traffic::find($id)->where('create_at', $month);
        

        return view('costs/index', [
            'traffics' => $traffics,
            'current_traffic_id' => $id,
        ]);
    }

    // public function index(int $id, string $month)
    // {
    //     if($month == null){
    //     $traffics = Traffic::find(1);
    //     }else{
    //         $traffics = Traffic::find(1);
    //         $traffic_lists = Traffic::find(1)->where('create_at', $month);
    //     }
    //     return view('costs/index', [
    //         'traffics' => $traffics,
    //         'traffic_lists'=>$traffic_lists,
    //         'current_traffic_id' => $id,
    //     ]);
    // }
}


