@extends('layout/main')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/regisseller.css')}}">
@endsection

@section('content')
<div class="container">
  <div class="content">
    <div class="left-content">
      <div class="carousell">
        <div class="slider-wrapper">
          <div class="overflow-wrapper">
            <img src="{{ asset('assets/img/slider1.png')}}" alt="">
            <img src="{{ asset('assets/img/slider2.png')}}" alt="">
            <img src="{{ asset('assets/img/slider3.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="right-content">
      <div class="data">
        <div class="logo">
          <img src="{{ asset('assets/trolley.png')}}" alt="">
          <p>ZenIT</p>
        </div>
        <div class="form-data">
          <h1>Welcome Back</h1>
          <form action="" id="registration">
            <div class="email">
              <label for="email">Email</label>
              <input type="email" placeholder="email" name="email" id="email">
            </div>
            <div class="password">
              <label for="password">Password</label>
              <input type="password" placeholder="password" name="password" id="password">
            </div>
            <div class="checkbox-remember">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">Remember Me</label>
            </div>
            <div class="btn-submit">
              <button type="submit" name="submit" id="submit">Submit</button>
            </div>
          </form>
          <div class="signin">
            <p>Didn't have account yet? <span><a href="registseller.html">Sign Up</a></span></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection