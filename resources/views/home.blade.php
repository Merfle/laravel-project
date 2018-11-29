@extends('layouts.app')

@section('content')
<main class="main">
        <div class="card">
  				<div class="card-data">
  					<a href="nosotros"><h2>nosotros</h2></a>
  				</div>
          <div class="photos">
            <img src="../img/library-1.jpeg" alt="foto-boceto" style="width:100%;height:40%;">
          </div>
  			</div>
        <div class="card">
  				<div class="card-data">
  					<a href="portfolio"><h2>portfolio</h2></a>
  				</div>
          <div class="photos">
            <img src="../img/interior-design-2.jpg" alt="foto-boceto" style="width:100%;">
          </div>
  			</div>
        <div class="card">
  				<div class="card-data">
  					<a href="cotizaciones"><h2>cotizaciones</h2></a>
  				</div>
          <div class="photos">
            <img src="../img/interior-design-1.jpg" alt="foto-boceto" style="width:100%;">
          </div>
  			</div>
      </main>
@endsection
