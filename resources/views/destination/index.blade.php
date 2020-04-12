@extends('layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">配信先定義一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">名前</th>
        <th class="text-center">配信先</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($destinations as $destination)
      <tr>
        <td>
          <a href="/destination/{{ $destination->id }}/edit">{{ $destination->id }}</a>
        </td>
        <td>{{ $destination->name }}</td>
        <td>{{ $destination->definition }}</td>
        <td>
          <form action="/destination/{{ $destination->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/destination/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection
