<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = [1, 2, 3];

        foreach ($ids as $id) {
            DB::table('traffic_info')->insert([
                'id' => $id,
                'user_employee_number' => 110378,
                'traffic_type' => '1',
                'traffic_billing_destination' =>'1',
                'traffic_departure_station' =>'南栗橋駅',
                'traffic_arrival_station' =>'渋谷駅',
                'traffic_travel_costs' =>860,
                'traffic_used_date'=>'2020-2-26',
                'traffic_workplace' =>'渋谷',
                'traffic_user_comments' =>'申請遅れてしまいました、申し訳ございません',
                'traffic_request_status' =>'2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}