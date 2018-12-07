@extends('layouts.app')


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
@endphp

@section('content')
  <div class="form-container">
    <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="form name">
          <label for="name">
            {{ __('Name') }}
          </label>
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="form last name">
          <label for="name">
            {{ __('Last Name') }}
          </label>
          <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>
          @if ($errors->has('last_name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('last_name') }}</strong>
            </span>
          @endif
        </div>
        <div class="form email">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="form phone">
          <label for="phone">Phone</label>
          <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>
          @if ($errors->has('phone'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('phone') }}</strong>
            </span>
          @endif
        </div>
        <div class="form password">
          <label for="password">
            {{ __('Password') }}
          </label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        <div class="form password confirm">
          <label for="password-confirm">
            {{ __('Confirm Password') }}
          </label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <div class="form birthday">
          <label for="birthday">
            {{ __('Birthday') }}
          </label>
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
        <div class="form avatar">
          <label for="avatar">{{ __('Profile Picture') }}</label>
          <input type="file" name="avatar"/>
        </div>
        <div class="form submit">
          <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
          </button>
        </div>
      </form>
    </div>
@endsection
