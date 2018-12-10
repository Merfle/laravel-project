@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <div class="content">
    <div class="card-1">
      <div class="card-header">Dashboard</div>
        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
        </div>
      </div>

      <script language="JavaScript">
      function setVisibility(id, visibility) {
        document.getElementById(id).style.display = visibility;
}
      </script>

<input type=button  value='Mostrar Proyecto' onclick="setVisibility('sub3', 'inline');";>
<input type=button  value='Ocultar Proyecto' onclick="setVisibility('sub3', 'none');";>
    <form id="sub3">
          <label for="project">Areas a rediseñar:</label><br>
          <h3>Piso</h3>
            <input type="checkbox" name="piso" value="">
            <h3>Pared</h3>
            <input type="checkbox" name="pared" value="">
            <h3>Techo</h3>
            <input type="checkbox" name="techo" value="">
            <h3>Placard</h3>
            <input type="checkbox" name="placard" value="">
            <h3>Ventana</h3>
            <input type="checkbox" name="ventana" value="">
            <h3>Cortina</h3>
            <input type="checkbox" name="cortina" value=""><br>
            <h3>Metros cuadrados</h3>
            <input type="text" name="metros" value=""><br>
            <input type="submit" value="Submit">
        </form>
      </div>
  </div>
@endsection
