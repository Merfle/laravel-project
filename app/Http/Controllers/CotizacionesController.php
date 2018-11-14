<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    public function show(){
      return view('cotizaciones');
    }
}
