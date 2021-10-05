@extends('layouts.app_todo')
@section('content')
<div class="container mt-3">
    <div class="col-10"></div>
    <div class="card">
        @foreach ($todo as $data)
        <h1>{{$data->title}}</h1>
        <p>{{$data->description}}</p>
        @endforeach

    </div>
</div>
@endsection
