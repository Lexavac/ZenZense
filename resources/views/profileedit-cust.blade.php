@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/profileedit-cust.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="pict">
<img src="{{asset('assets/img/Rectangle 173.png')}}" alt="">
<label for="photo">Change Photo</label>
<input type="file" name="photo" id="photo">
</div>

<div class="details">
<table>
    <tr>
        <td>Customer Id</td>
        <td>
            <input type="text" value="3241263" disabled class="id">
        </td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>
            <input type="text" value="Kiagus">
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>
            <input type="text" value="Ahmad">
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <input type="email" value="kiagus@gmail.com">
        </td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>
            <input type="number" value="0987654432">
        </td>
    </tr>
    <tr>
        <td class="alamat">Address</td>
        <td>
            <textarea  name="" id="" cols="65" rows="5">dihatimu</textarea>
        </td>
    </tr>
</table>
<div class="pass">
    <p>Password</p>
    <input type="password" value="agusganteng"> 
    <p class="change-pass">Change Password</p>
</div>
<button>Save Changes</button>
</div>
</div>
@endsection
