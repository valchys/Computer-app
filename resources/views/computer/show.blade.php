@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["computer"]["name"] }}
        </h5>
        <p class="card-text"style="color: green">$ {{ $viewData["computer"]["price"] }}</p>
        <p class="card-text">Ref: {{ $viewData["computer"]["reference"] }}</p>
        <p class="card-text">Brand: {{ $viewData["computer"]["brand"] }}</p>
        <p class="card-text">Type: {{ $viewData["computer"]["type"] }}</p>
        <p class="card-text">Description: {{ $viewData["computer"]["description"] }}</p>
        <p class="card-text">Stock: {{ $viewData["computer"]["quantity"] }}</p>   

        <form action="{{ route('computer.delete', $viewData["computer"]["id"])}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">
          <b>Delete Computer</b> 
          </button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection