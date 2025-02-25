@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@if(session('success'))
<div class="alert alert-danger">
 {{ session('success') }}
</div>
@endif
<div class="row">
  @foreach ($viewData["computers"] as $computer)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
      <p class="card-text fw-bold">{{ $computer["reference"] }}</p>
        <a href="{{ route('computer.show', ['id'=> $computer["id"]]) }}"
          class="btn bg-primary text-white">{{ $computer["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
