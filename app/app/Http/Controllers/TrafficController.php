<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Traffic;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTraffic;

class TrafficController extends Controller
{
    public function showCreateForm()
    {
        return view('mypage/create');
    }

    public function create(CreateTraffic $request)
    {
    // トラフィックモデルのインスタンスを作成する
        $traffic = new Traffic();
    // 入力値を代入する
        $traffic->user_employee_number=$request->user_employee_number;
        $traffic->traffic_type = $request->traffic_type;
        $traffic->traffic_billing_destination = $request->traffic_billing_destination;
        $traffic->traffic_departure_station = $request->traffic_departure_station;
        $traffic->traffic_arrival_station = $request->traffic_arrival_station;
        $traffic->traffic_travel_costs = $request->traffic_travel_costs;
        $traffic->traffic_workplace = $request->traffic_workplace;
        $traffic->traffic_used_date = $request->traffic_used_date;
        $traffic->traffic_user_comments = $request->traffic_user_comments;
    // インスタンスの状態をデータベースに書き込む
        $traffic->save();
       
        $toMonth = date("Y-m");
        $month = $toMonth;

        return redirect()->route('costs.index', [
        'id' => $traffic->id,
        'month' => $month,
        ]);
    }
}