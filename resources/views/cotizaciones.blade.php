@extends('layouts.app')

@section('title', 'Cotizaciones')

@section('content')
      <main class="main-body">
        <div class="card">
          <div class="card-data">
            <a href="#"><h2>nosotros</h2></a>
          </div>
          <div class="photos">
            <img src="../media/interior-design-1.jpg" alt="foto-boceto" style="width:100%;height:40%;">
          </div>
        </div>
        <div class="card">
          <div class="card-data">
            <a href="#"><h2>portfolio</h2></a>
          </div>
          <div class="photos">
            <img src="../media/library-1.jpeg" alt="foto-boceto" style="width:100%;">
          </div>
        </div>
        <div class="card">
          <div class="card-data">
            <a href="#"><h2>cotizaciones</h2></a>
          </div>
          <div class="photos">
            <img src="../media/interior-design-2.jpg" alt="foto-boceto" style="width:100%;">
          </div>
        </div>
      </main>
@endsection
