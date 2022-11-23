@extends('layout/main')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/setup.css')}}">
@endsection

@section('content')
    <div class="content">
      <h1 class="judul-setup"> Set Up Profle</h1>
      <h2 class="subjudul-setup">Complete this form according to your personal data, to go to the next page</h2>

      <div class="set-username">
        <h1 class="judul-set-user">1. Set your username</h1>
        <input type="text">
      </div>

      <div class="set-address">
        <h1 class="">Set your Address for delivery purpose</h1>
        <textarea name="" id="" cols="30" rows="10"></textarea>
      </div>
    </div>
@endsection