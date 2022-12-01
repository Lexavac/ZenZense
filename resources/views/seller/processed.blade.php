@extends('layout/app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/processed.css')}}">
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
                <th>Quantity</th>
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
                <td style="width: 120px;">
                    <a href="#" style="font-weight:600;" id="btn-receipt" onclick="On_click(this.id)">Send</a>
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
                <td style="width: 120px;">
                    <a href="#" style="font-weight:600;" id="btn-receipt" onclick="On_click(this.id)">Send</a>
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
                <td style="width: 120px;">
                    <a href="#" style="font-weight:600;" id="btn-receipt" onclick="On_click(this.id)">Send</a>
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
                <td style="width: 120px;">
                    <a href="#" style="font-weight:600;" id="btn-receipt" onclick="On_click(this.id)">Send</a>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<div id="myReceipt" class="modalreceipt">
    <div class="modalreceipt-content">
        <div class="header">
            <span class="close close-rec">&times;</span>
        </div>
        <div class="reciep-content">
            <div class="receipt-pict">
                <p class="cust-rec">Receipt Pict</p>
                <label id="largeFile" for="file">
                    <input type="file" id="file" />
                </label>
            </div>
            <div class="receipt-number">
                <p>Receipt Number</p>
                <input type="text">
            </div>
            <div class="btn-receipt">
                <button>submit</button>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('assets/js/receipt.js')}}"></script>
@endsection