@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
  <div class="content">
        <div class="card-1">
          <div class="card-data-1">
            <a href="#"><h2>hogar</h2></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
          </div>
          <div class="photos-1">
            <img src="../img/library-1.jpeg" alt="foto-boceto" style="width:100%;height:40%;">
          </div>
        </div>
        <div class="card-2">
          <div class="card-data-2">
            <a href="#"><h2>espacios de trabajo</h2></a>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
          <div class="photos-2">
            <img src="../img/library-1.jpeg" alt="foto-boceto" style="width:100%;">
          </div>
        </div>
        <div class="card-3">
          <div class="card-data-3">
            <a href="#"><h2>eventos</h2></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
          <div class="photos-3">
            <img src="../img/library-1.jpeg" alt="foto-boceto" style="width:100%;">
          </div>
        </div>
  </div>
@endsection
