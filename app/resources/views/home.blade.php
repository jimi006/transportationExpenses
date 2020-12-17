@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">
            交通費申請をしましょう
          </div>
          <div class="panel-body">
            <div class="text-center">
              <a href="{{ route('costs.index', ['id'=>1]) }}" class="btn btn-primary">
                マイページへ
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection