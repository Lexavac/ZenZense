@extends('layout/app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/complete-order.css')}}">
@endsection

@section('content')
@include('components.sidebar')
<div class="contents">
    <div class="sub-content">
        <a href="{{ route('upcoming') }}">Upcoming Orders</a>
        <a href="{{ route('processed') }}">Processed Orders</a>
        <a href="{{ route('completed') }}">Completed Orders</a>
        <a href="{{ route('canceled') }}">Canceled Orders</a>
    </div>

    <div class="content-tabs">
        <table border="1px solid black">
            <tr>
                <th style="width: 70px;">No</th>
                <th style="text-align: start;">Product</th>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th style="width: 100px;">Quantity</th>
                <th>Type</th>
                <th></th>
            </tr>
            <tr>
                <td style="width: 100px;">1</td>
                <td style="display: flex; gap:20px; text-align: start; width: 250px;">
                    <img src="assets/web3.jpg" alt="">
                    <div class="prod-details" style="line-height: 14px;">
                        <p>Product Name</p>
                        <p>19 - 11 - 22</p>
                        <p>Rp.999.999</p>
                    </div>
                </td>
                <td style="width: 110px;">001</td>
                <td style="width: 250px;">User Agus</td>
                <td style="width: 120px;">2</td>
                <td style="width: 100px;">
                    <p id="label-order" style="margin-top: 10px;">Software</p>
                </td>
                <td style="width: 100px;">
                    <button href="" style="font-weight:600;" id="btn-form-rev" onclick="On_klik(this.id)">Review</button>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">1</td>
                <td style="display: flex; gap:20px; text-align: start; width: 250px;">
                    <img src="assets/web3.jpg" alt="">
                    <div class="prod-details" style="line-height: 14px;">
                        <p>Product Name</p>
                        <p>19 - 11 - 22</p>
                        <p>Rp.999.999</p>
                    </div>
                </td>
                <td style="width: 70px;">001</td>
                <td style="width: 180px;">User Agus</td>
                <td style="width: 100px;">2</td>
                <td style="width: 70px;">
                    <p id="label-order" style="margin-top: 10px;">Software</p>
                </td>
                <td style="width: 100px;">
                    <button href="" style="font-weight:600;"  id="btn-form-rev" onclick="On_klik(this.id)">review</button>
                </td>
            </tr>
            <tr>
                <td style="width: 90px;">1</td>
                <td style="display: flex; gap:20px; text-align: start; width: 250px;">
                    <img src="assets/web3.jpg" alt="">
                    <div class="prod-details" style="line-height: 14px;">
                        <p>Product Name</p>
                        <p>19 - 11 - 22</p>
                        <p>Rp.999.999</p>
                    </div>
                </td>
                <td style="width: 70px;">001</td>
                <td style="width: 180px;">User Agus</td>
                <td style="width: 100px;">2</td>
                <td style="width: 70px;">
                    <p id="label-order" style="margin-top: 10px;">Software</p>
                </td>
                <td style="width: 100px;">
                    <button href="" style="font-weight:600;"  id="btn-form-rev" onclick="On_klik(this.id)">Review</button>
                </td>
            </tr>
            <tr>
                <td style="width: 90px;">1</td>
                <td style="display: flex; gap:20px; text-align: start; width: 250px;">
                    <img src="assets/web3.jpg" alt="">
                    <div class="prod-details" style="line-height: 14px;">
                        <p>Product Name</p>
                        <p>19 - 11 - 22</p>
                        <p>Rp.999.999</p>
                    </div>
                </td>
                <td style="width: 70px;">001</td>
                <td style="width: 180px;">User Agus</td>
                <td style="width: 100px;">2</td>
                <td style="width: 70px;">
                    <p id="label-order" style="margin-top: 10px;">Software</p>
                </td>
                <td style="width: 100px;">
                    <button href="" style="font-weight:600;"  id="btn-form-rev" onclick="On_klik(this.id)">Review</button>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<div id="myForm" class="modalform">
    <div class="modalform-content">
        <div class="header">
            <span class="close close-form">&times;</span>
        </div>
        <div class="reciep-content">
            <div class="form-profile">
                <img src="assets/ALM00016.JPG" alt="">
                <p>Username kiagus ahmad farhan azis</p>
            </div>
            <div class="form-ratings">
                <p>Rating</p>
                <div class="star-widget">
                    <input type="radio" name="rate" id="rate-5">
                    <label for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-4">
                    <label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-3">
                    <label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-2">
                    <label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-1">
                    <label for="rate-1" class="fas fa-star"></label>
                </div>
            </div>
            <div class="form-review">
                <p>Review</p>
                <textarea name="" id="" cols="83" rows="7"></textarea>
            </div>
            <div class="btn-form">
                <button>submit</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/form-review.js')}}"></script>

@endsection