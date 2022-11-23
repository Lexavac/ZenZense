@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/profile.css')}}">
@endsection

@section('content')
@include('components.sidebar')
  

<div class="contents">
  <div class="sub-content">
    <a href="{{ route('profile') }}">My Profile</a>
    <a href="{{ route('profile-edit') }}">Edit Profile</a>
</div>

  <div class="row-1">
      <div class="left">
          <img src="assets/ALM00016.JPG" alt="">
          <button>Edit Profile</button>
      </div>
      <div class="right">
          <p>user 24124341</p>
          <h1>Kiagus Ahmad Farhan Aziz</h1>
          <p>Gapapa jele yang penting sombong</p>
      </div>
  </div>

  <div class="row-2">
      <table>
          <tr>
              <td>First Name</td>
              <td>Kiagus Ahmad</td>
          </tr>
          <tr>
              <td>Last Name</td>
              <td>Farhan Aziz</td>
          </tr>
          <tr>
              <td>Email</td>
              <td>kgs.FA@gmail.com</td>
          </tr>
          <tr>
              <td>Phone Number</td>
              <td>+62 878 8742 7813</td>
          </tr>
          <tr>
              <td>Address</td>
              <td>2972 Westheimer Rd. Santa Ana, Illinois 85486 </td>
          </tr>
      </table>
  </div>
</div>
@endsection