<link rel="stylesheet" href="../css/app.css">

@extends('layouts.app')

@section('title', 'Profile')

@section('content')
  <main class="main">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
          </div>
        </div>
      </div>
      <div class="card">
              <form class="" action="index.html" method="post">
                

      </div>



      </form>
  </main>
@endsection
