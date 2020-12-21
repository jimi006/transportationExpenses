<?php

namespace App\Http\Controllers;

use App\Traffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostController extends Controller
{
    //string $targetMonth
    public function index(int $id, string $targetMonth)
    {
        $user = Auth::user();
        $employeeNum= $user['user_employee_number'];

        if(empty($targetMonth))
        {
            $toMonth = date("Y-m");
            $targetMonth = $toMonth;
        }
        
        $months = Traffic::select('created_at')->get();
        $array = [];
        foreach ($months as $month) {
            $data = date( 'Y-m', strtotime($month->created_at));
            $array[] = $data;
        }
        $months = array_unique($array);

        $firstDate = date('Y-m-d', strtotime('first day of ' . $targetMonth));
        $lastDate = date('Y-m-d', strtotime('last day of ' . $targetMonth));

        $traffics = Traffic::whereBetween('created_at', [$firstDate, $lastDate])
            ->where('user_employee_number', $employeeNum)
            ->get();

        return view('costs/index', [
            'traffics' => $traffics,
            'current_traffic_id' => $id,
            'months' => $months,
        ]);
    }
}


