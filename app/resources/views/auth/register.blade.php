@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">会員登録<span class="label label-danger">必須</span></div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
              @csrf
              <div class="form-group col-sm-12">
                <label for="gender">性別</label>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="user_gender" name="user_gender" value="男" />男
                  <input type="radio" class="form-check-input" id="user_gender" name="user_gender" value="女" />女
                </div>
              </div>

              <div class="form-group col-sm-12">
                <label for="user_employee_number">社員番号</label>
                <input type="text" class="form-control" id="user_employee_number" name="user_employee_number" value="{{ old('user_employee_number') }}" />
              </div>

              <div class="form-group col-sm-12">
                <label for="user_mail">メールアドレス</label>
                <input type="text" class="form-control" id="user_mail" name="user_mail" value="{{ old('user_mail') }}" />
              </div>

              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="user_name">名前</label>
                  <input type="text" class="form-control" id="user_name" name="user_name" value="{{ old('user_name') }}" />
                </div>

                <div class="form-group col-sm-6">
                  <label for="user_kana">フリガナ</label>
                  <input type="text" class="form-control" id="user_kana" name="user_kana" value="{{ old('user_kana') }}" />
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="user_department">部署</label>
                  <input type="text" class="form-control" id="user_department" name="user_department" value="{{ old('user_department') }}" />
                </div>

                <div class="form-group col-sm-4">
                  <label for="user_category">部門</label>
                  <input type="text" class="form-control" id="user_category" name="user_category" value="{{ old('user_category') }}" />
                </div>

                <div class="form-group col-sm-4">
                  <label for="user_position">役職</label>
                  <input type="text" class="form-control" id="user_position" name="user_position" value="{{ old('user_position') }}" />
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="user_nearest_station">自宅最寄駅</label>
                  <input type="text" class="form-control" id="user_nearest_station" name="user_nearest_station" value="{{ old('user_nearest_station') }}" />
                </div>

                <div class="form-group col-sm-6">
                  <label for="user_office_station">勤務先最寄駅</label>
                  <input type="text" class="form-control" id="user_office_station" name="user_office_station" value="{{ old('user_office_station') }}" />
                </div>
              </div>


              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="user_password">パスワード</label>
                  <input type="password" class="form-control" id="user_password" name="user_password">
                </div>
                <div class="form-group col-sm-6">
                  <label for="user_password-confirm">パスワード（確認）</label>
                  <input type="password" class="form-control" id="user_password-confirm" name="user_password_confirmation">
                </div>
              </div>

              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection