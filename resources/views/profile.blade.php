@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <div class="content">
    <div class="card">
      <div class="card-header">Dashboard</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="dash" >Dashboard</div>
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <form>
              <label for="project">Areas a rediseñar:</label><br>
                Piso
                <input type="checkbox" name="piso" value="">
                Pared
                <input type="checkbox" name="pared" value="">
                Techo
                <input type="checkbox" name="techo" value="">
                Placard
                <input type="checkbox" name="placard" value="">
                Ventana
                <input type="checkbox" name="ventana" value="">
                Cortina
                <input type="checkbox" name="cortina" value=""><br>
                Metros cuadrados
                <input type="text" name="metros" value=""><br>
                <input type="submit" value="Submit">
            </form>
          </div>
        </div>
  </div>
@endsection
