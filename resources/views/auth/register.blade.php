<link rel="stylesheet" href="../css/app.css">

@extends('layouts.app')

{{--
@php
$month=['January','February','March','April','May','June','July','August','September','October','November','December'];
if (isset($_POST['submit'])) {
  $name=$_POST["name"];
  $last_name=$_POST["last_name"];
  $email=$_POST["email"];
  $day= $_POST["birth_day"];
  $month= $_POST["birth_month"];
  $year= $_POST["birth_year"];
  if (isset($_POST["categories"])) {
    $categories= $_POST["categories"];
  }else {
    $categories= [];
  }

//
  $errors=registerValidation($_POST);
  if (empty($errors)) {
    saveUser($_POST);
  }

}
@endphp --}}

@section('content')
<main class="main">
  <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('Register') }}</div>

                     <div class="card-body">
                         <form method="POST" action="{{ route('register') }}">
                             @csrf

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            	</div>

                              <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                  <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                  @if ($errors->has('phone'))
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                      </span>
                                    @endif
                                </div>
                              </div>


                              <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                                </div>
                              </div>


                              <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                              </div>

                              {{-- <div class="form-group row">
                                <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>
                                  <div class="col-sm-2">
                                    <select class="form-control" name="birth_day">
                                      @php

                                       for ($i=1; $i <= 31; $i++) {
                                        if (isset($day)&&$day==$i) {
                                          echo "<option selected value=$i>$i</option>";
                                        }else {
                                          echo "<option value=$i>$i</option>";
                                        }
                                      } @endphp
                                    </select>
                                  </div>

                                  <div class="col-sm-2">
                                    <select class="form-control" name="birth_month">
                                      @php
                                       for ($i=0; $i < count($month); $i++) {
                                        if (isset($month)&&$month==($i+1)) {
                                          echo "<option selected value=".($i+1).">$month[$i]</option>";
                                        }else {
                                          echo "<option value=".($i+1).">$month[$i]</option>";
                                          }
                                        } @endphp
                                    </select>
                                  </div>

                                  <div class="col-sm-2">
                                    <select class="form-control" name="birth_year">
                                      @php
                                       for ($i=1930; $i < 2018; $i++) {
                                        if (isset($year)&&$year==$i) {
                                          echo "<option selected value=$i>$i</option>";
                                        }else {
                                          echo "<option value=$i>$i</option>";
                                        }
                                      } @endphp
                                    </select>
                                  </div>
                                </div> --}}

                                <div class="form-group row">
                                  <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Profile Picture') }}</label>
                                    <div class="col-sm-2">
                                      <input type="file" name="avatar"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                          </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
