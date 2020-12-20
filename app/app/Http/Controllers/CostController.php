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
        // $month = \App\User::select()
        //     ->join('user_info','user_info.user_employee_number','=','traffic_info.user_employee_number')
        //     ->where('created_at',1)
        //     ->get();

        
        //$traffic_lists = Traffic::find($id)->where('create_at', $month);
        

        // $dt_from = new \Carbon\Carbon();
		// $dt_from->startOfMonth();

		// $dt_to = new \Carbon\Carbon();
		// $dt_to->endOfMonth();

		// $month = Traffic::whereBetween('created_at', [$dt_from, $dt_to])->get();
        // $month = strtotime($month);
        // $month = date('Y年m月',$month);

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


