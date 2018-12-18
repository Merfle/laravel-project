@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
  <div class="content">
        <div class="card-1">
          <div class="card-data-1">
            <h2>eventos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
          </div>
          <div class="photos-1">
            <img src="../img/F1-25.jpg" alt="foto-boceto" style="width:100%;">
          </div>
        </div>
        <div class="card-2">
          <div class="card-data-2">
            <h2>hogar</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
          </div>
          <div class="photos-2">
            <img src="../img/event-1.jpg" alt="foto-boceto" style="width:100%">
          </div>
        </div>
        <div class="card-3">
          <div class="card-data-3">
            <h2>espacios de trabajo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
          <div class="photos-3">
            <img src="../img/library-1.jpeg" alt="foto-boceto" width="100%">
          </div>
        </div>
  </div>
@endsection
