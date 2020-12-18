@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">交通費申請フォーム</div>
          <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
             交通費を申請する
            </a>
          </div>
          <div class="list-group">
            @foreach($traffics as $traffic)
            <a href="{{ route('costs.index', ['id' => $traffic->id ,'month'  =>$traffic['created_at']->format('Ym') ]) }}"  class="list-group-item {{ $current_traffic_id === $traffic->id ? 'active' : '' }}">
            {{$traffic['created_at']->format('Y年m月')}}
            </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">申請一覧</div>
          <!-- <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
          </div> -->
          <table class="table">
            <thead>
            <tr>
              <th>ルート</th>
              <th>片道</th>
              <th>申請日</th>
              <th>状態</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach($traffics as $traffic)
                <tr>
                  <td>{{ $traffic['traffic_departure_station'] }}〜{{ $traffic['traffic_arrival_station'] }}</td>
                  <td>{{ $traffic['traffic_travel_costs'] }}円</td>
                  <td>{{ $traffic['created_at']->format('m月d日') }}</td>
                  <td>
                    <span class="label {{ $traffic->status_class }}">{{ $traffic->status_label }}</span>
                  </td>
                  <td><a href="#">編集</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection

            