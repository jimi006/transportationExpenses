<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_name' => ['required', 'string', 'max:255'],
            'user_mail' => ['required', 'string', 'email', 'max:255', 'unique:user_info'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_kana' => ['required', 'string', 'max:255'],
            'user_employee_number' => ['required', 'string', 'max:255', 'unique:user_info'],
            'user_gender' => ['required', 'string', 'max:255'],
            'user_department' => ['required', 'string', 'max:255'],
            'user_category' => ['required', 'string', 'max:255'],
            'user_position' => ['required', 'string', 'max:255'],
            'user_nearest_station' => ['required', 'string', 'max:255'],
            'user_office_station' => ['required', 'string', 'max:255'],
        ], [], [
            'user_name' => '名前',
            'user_mail' => 'メールアドレス',
            'password' => 'パスワード',
            'user_kana' => 'フリガナ',
            'user_employee_number' => '社員番号',
            'user_gender' => '性別',
            'user_department' => '部署',
            'user_category' => '部門',
            'user_position' => '役職',
            'user_nearest_station' => '自宅最寄駅',
            'user_office_station' => '勤務先最寄駅',
        ]);
    }

 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'user_kana' => $data['user_kana'],
            'user_mail' => $data['user_mail'],
            'user_employee_number' => $data['user_employee_number'],
            'user_gender' => $data['user_gender'],
            'user_department' => $data['user_department'],
            'user_category' => $data['user_category'],
            'user_position' => $data['user_position'],
            'user_nearest_station' => $data['user_nearest_station'],
            'user_office_station' => $data['user_office_station'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
