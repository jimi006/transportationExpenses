<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTraffic extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_employee_number'=>'required',
            'traffic_type' => 'required',
            'traffic_billing_destination' => 'required',
            'traffic_departure_station' => 'required',
            'traffic_arrival_station' => 'required',
            'traffic_travel_costs' => 'required',
            'traffic_workplace' => 'required',
            'traffic_used_date' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'user_employee_number'=>'社員番号',
            'traffic_type' => '交通手段',
            'traffic_billing_destination' => '請求先',
            'traffic_departure_station' => '出発駅',
            'traffic_arrival_station' => '到着駅',
            'traffic_travel_costs' => '片道料金',
            'traffic_workplace' => '勤務先',
            'traffic_used_date' => '該当日',
        ];
    }
}
