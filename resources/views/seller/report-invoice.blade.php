@extends('layout/app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/report-invoice.css')}}">
@endsection

@section('content')
@include('components.sidebar')
<div class="contents">
    <div class="export">
        <button>
            <iconify-icon icon="gridicons:pages"></iconify-icon>
            Export to PDF
        </button>
    </div>

    <div class="invoice-content">
        <div class="first-row">
            <div class="left">
                <h5>Invoice</h5>
                <p>No: INV/41424/MLI/2441</p>
                <p>Mei 31, 2022</p>
            </div>
            <div class="right">
                <img src="assets/logo.png" alt="">
            </div>
        </div>
        <div class="scnd-row">
            <div class="left">
                <p>Buyer Details</p>
                <h4>Kiagus Ahmad Kece</h4>
                <p>Kgs.farhanaziz@gmail.com</p>
                <p>Kp. Sugutamu Rt.05 Rw.021 No.131</p>
            </div>
            <div class="right">
                <p>Order Id</p>
                <h6>0488277519</h6>
            </div>
        </div>
        <div class="product">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td style="width:10000px; line-height: 0px;">
                        <p>Template Kece Banget</p>
                        <p style="font-size: 14px; color:rgba(0, 0, 0, 0.404);">Software</p>
                    </td>
                    <td>4</td>
                    <td>Rp.50.000</td>
                    <td>Rp.200.000</td>
                </tr>
                <tr>
                    <td style="width:10000px; line-height: 0px;">
                        <p>Template Kece Banget</p>
                        <p style="font-size: 14px; color:rgba(0, 0, 0, 0.404);">Software</p>
                    </td>
                    <td>4</td>
                    <td>Rp.50.000</td>
                    <td>Rp.200.000</td>
                </tr>
            </table>
        </div>
        <div class="last-row">
            <div class="first">
                <div class="first-left">
                    <p>Bank Transfer</p>
                    <h5>Agus Tukang Revisi</h5>
                </div>
                <div class="first-right">
                    <p>Total Amount</p>
                    <p style="font-weight:700;">Rp.400.000</p>
                </div>
            </div>
            <div class="second">
                <p>Bank Account : 08987654321</p>
                <p>Code : 0214134</p>
                <p>Total Payment : Rp. 450.000</p>
            </div>
        </div>
    </div>
</div>

@endsection