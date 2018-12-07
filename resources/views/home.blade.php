@extends('layouts.app')

@section('content')
<div class="content">
  <div class="card-1">
      <div class="card-data-1">
        <a href="nosotros"><h2>nosotros</h2></a>
      </div>
      <div class="photos-1">
        <img src="../img/library-1.jpeg" alt="foto-boceto" width="100%">
      </div>
  </div>
  <div class="card-2">
    <div class="card-data-2">
      <a href="portfolio"><h2>portfolio</h2></a>
    </div>
    <div class="photos-2">
      <img src="../img/interior-design-2.jpg" alt="foto-boceto" width="100%">
    </div>
  </div>
  <div class="card-3">
    <div class="card-data-3">
      <a href="faq"><h2>preguntas frecuentes</h2></a>
    </div>
    <div class="photos-3">
      <img src="../img/interior-design-1.jpg" alt="foto-boceto" width="100%">
    </div>
  </div>
</div>
@endsection
