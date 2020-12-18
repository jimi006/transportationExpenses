@extends('layout')

@section('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col col-md-offset-3 col-md-6">
          <nav class="panel panel-default">
            <div class="panel-heading">交通費申請フォーム</div>
            <div class="panel-body">
              <form action="{{ route('mypage.create') }}" method="post">
                @csrf

                <div class="form-group col-sm-12">
                  <label for="user_employee_number">社員番号</label>
                  <input type="text" class="form-control" name="user_employee_number" id="user_employee_number" value="{{ old('user_employee_number') }}" />
                </div>

                <div class="form-group col-sm-12">
                  <label for="traffic_type">交通手段</label>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="traffic_type" name="traffic_type" value="電車" />電車
                    <input type="radio" class="form-check-input" id="traffic_type" name="traffic_type" value="バス" />バス
                    <input type="radio" class="form-check-input" id="traffic_type" name="traffic_type" value="タクシー" />タクシー
                    <input type="radio" class="form-check-input" id="traffic_type" name="traffic_type" value="飛行機" />飛行機
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="traffic_billing_destination">請求先</label>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" id="traffic_billing_destination" name="traffic_billing_destination" value="本社" />本社
                    <input type="radio" class="form-check-input" id="traffic_billing_destination" name="traffic_billing_destination" value="取引先" />取引先
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label for="traffic_departure_station">出発駅</label>
                    <input type="text" class="form-control" id="traffic_departure_station" name="traffic_departure_station" value="{{ old('traffic_departure_station') }}" />
                  </div>

                  <div class="form-group col-sm-6">
                    <label for="traffic_arrival_station">到着駅</label>
                    <input type="text" class="form-control" id="traffic_arrival_station" name="traffic_arrival_station" value="{{ old('traffic_arrival_station') }}" />
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label for="traffic_travel_costs">片道料金</label>
                    <input type="text" class="form-control" id="traffic_travel_costs" name="traffic_travel_costs" value="{{ old('traffic_travel_costs') }}" />
                  </div>

                  <div class="form-group col-sm-6">
                    <label for="traffic_workplace">勤務先</label>
                    <input type="text" class="form-control" id="traffic_workplace" name="traffic_workplace" value="{{ old('traffic_workplace') }}" />
                  </div>
                </div>

                <div class="form-group col-sm-12">
                  <label for="traffic_used_date">該当日</label>
                  <input type="text" class="form-control" name="traffic_used_date" id="traffic_used_date" value="{{ old('traffic_used_date') }}" />
                </div>

                <div class="form-group col-sm-12">
                  <label for="traffic_user_comments">備考欄</label>
                  <textarea class="form-control" name="traffic_user_comments" id="traffic_user_comments" value="{{ old('traffic_user_comments') }}"></textarea>
                </div>

                <div class="text-right col-sm-12">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
    @endsection

    @section('scripts')
     <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
     <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
     <script>
       flatpickr(document.getElementById('traffic_used_date'), {
         locale: 'ja',
         dateFormat: "Y/m/d",
         minDate: new Date()
       });
     </script>
    @endsection