@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/upcoming-order.css')}}">
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
              <th >Order ID</th>
              <th>Customer Name</th>
              <th style="width: 100px;">Quantity</th>
              <th>Type</th>
              <th></th>
          </tr>
          <tr>
              <td  style="width: 100px;">1</td>
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
              <td style="width: 100px;"><p id="label-order"  style="margin-top: 10px;">Software</p></td>
              <td style="width: 180px;">
                  <iconify-icon icon="material-symbols:check-circle-rounded" style="color: #5874af; font-size: 40px;"></iconify-icon>
                  <iconify-icon icon="ri:close-circle-fill" style="color: #d22d2dc7; font-size: 40px;"></iconify-icon>
              </td>
          </tr>
          <tr>
            <td  style="width: 100px;">1</td>
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
            <td style="width: 100px;"><p id="label-order"  style="margin-top: 10px;">Software</p></td>
            <td style="width: 180px;">
                <iconify-icon icon="material-symbols:check-circle-rounded" style="color: #5874af; font-size: 40px;"></iconify-icon>
                <iconify-icon icon="ri:close-circle-fill" style="color: #d22d2dc7; font-size: 40px;"></iconify-icon>
            </td>
        </tr>
        
      </table>
  </div>
</div>@endsection