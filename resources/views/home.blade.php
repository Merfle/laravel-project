@extends('layouts.app')

@section('content')
<div class="content">
  <div class="card">
      <div class="card-data">
        <a href="nosotros"><h2>nosotros</h2></a>
      </div>
      <div class="photos">
        <img src="../img/library-1.jpeg" alt="foto-boceto" width="100%">
      </div>
  </div>
  <div class="card">
    <div class="card-data">
      <a href="portfolio"><h2>portfolio</h2></a>
    </div>
    <div class="photos">
      <img src="../img/interior-design-2.jpg" alt="foto-boceto" width="100%">
    </div>
  </div>
  <div class="card">
    <div class="card-data">
      <a href="cotizaciones"><h2>cotizaciones</h2></a>
    </div>
    <div class="photos">
      <img src="../img/interior-design-1.jpg" alt="foto-boceto" width="100%">
    </div>
  </div>
</div>
@endsection
