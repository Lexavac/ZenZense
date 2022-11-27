@extends('layout/main')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/create-profile.css')}}">
@endsection

@section('content')
<div class="content">
    <div class="card-content">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png')}}" alt="">
        </div>
        <div class="main-img">
            <img src="{{ asset('assets/img/penguin.png')}}" alt="">
        </div>
        <div class="title-card">
            <div class="title">
                <h1>Hello!</h1>
            </div>
            <div class="sub-title">
                <p>Complete this step, to complete your profile account, which will make it easier to make orders later
                </p>
            </div>
            <div class="warning-alert">
                <iconify-icon icon="material-symbols:info-rounded"></iconify-icon>
                <p>Silahkan isi data diri anda untuk melanjutkan</p>
            </div>
        </div>
    </div>
    <div class="form-content">
        <form action="">
            <div class="title-form">
                <p>Setup Up Your Profile</p>
            </div>
            <div class="subtitle-form">
                <p>Complete this form according to your personal data, to go to the next page</p>
            </div>
            <div class="name">
                <div class="title-name">
                    <p>1. Set Your full name</p>
                </div>
                <div class="input-name">
                    <input type="text" name="" id="" placeholder="First Name">
                    <input type="text" name="" id="" placeholder="Last Name">
                </div>
            </div>
            <div class="phone-number">
                <div class="title-number">
                    <p>1. Set Your phone number</p>
                </div>
                <div class="input-number">
                    <input type="number" name="" id="" placeholder="Phone Number">
                </div>
            </div>
            <div class="address">
                <div class="title-address">
                    <p>3. Set your Address for delivery purpose</p>
                </div>
                <div class="input-address">
                    <textarea name="" id="" cols="77" rows="9" placeholder="Address"></textarea>
                </div>
            </div>
            <div class="profile">
              <div class="title-profile">
                <p>4. Set Your profile photo</p>
              </div>
              <div class="input-profile">
                <div class="title-photo">
                    <p>Select Profile :</p>
                </div>
                <div class="input-photo"></div>
              </div>
            </div>
            <div class="btn-submit">
              <input type="submit" value="Continue">
            </div>
        </form>
    </div>
</div>
@endsection