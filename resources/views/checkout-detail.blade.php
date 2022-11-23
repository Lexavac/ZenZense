@extends('layout/main')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/checkout.css')}}">
@endsection

@section('content')
<div class="main-content">
  <header>
    <div class="left-header">
      <div class="img-header">
        <img src="assets/logo.png" alt="">
      </div>
      <div class="title-header">
        <p>Order Overview</p>
      </div>
    </div>
    <div class="right-header">
      <div class="breadcrumb">
        <div class="scs"><p>&#10004;</p></div>
        <div class="ttl-bc"><p>Order Detail</p></div>
        <div class="strip">
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
        </div>
        <div class="elipse"><p>x</p></div>
        <div class="ttl-bc"><p>Payment Detail</p></div>
        <div class="strip">
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
          <div class="garis"></div>
        </div>
        <div class="elipse"><p>x</p></div>
        <div class="ttl-bc"><p>Complete Order</p></div>
      </div>
    </div>
  </header>
  <div class="content">
    <div class="right-content">
      <div class="title-order">
        <p>Summary Order</p>
      </div>
      <div class="subtitle-order">
        <p>Please Re-check your order before go to next step</p>
      </div>
      <div class="card-order">
        <div class="card-group">
          <div class="profile">
            <div class="img">
              <img src="assets/ALM00016.JPG" alt="">
            </div>
            <div class="toko">
              <p>agus mart(abak)</p>
            </div>
          </div>
          <div class="card-product">
            <div class="row1-product">
              <div class="img-order">
                <img src="assets/web1.jpg" alt="">
              </div>
              <div class="desc-order">
                <div class="ctgr-order">
                  <p>category product</p>
                </div>
                <div class="name-product-order">
                  <p>nama product nya yang panjang</p>
                </div>
                <div class="price-order">
                  <p>Rp. 1.200.000</p>
                </div>
                
              </div>
            </div>
            <div class="row2-product">
              <div class="type">
                <p>Software</p>
              </div>
            </div>
            <div class="row3-product">
              <div class="col1">
                <p>Unit Price</p>
                <p>Rp. 1.000.000</p>
              </div>
              <div class="col2">
                <p>Qty</p>
                <p>2</p>
              </div>
              <div class="col2">
                <p>Total</p>
                <p>Rp. 2.000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-group">
          <div class="profile">
            <div class="img">
              <img src="assets/ALM00016.JPG" alt="">
            </div>
            <div class="toko">
              <p>agus mart(abak)</p>
            </div>
          </div>
          <div class="card-product">
            <div class="row1-product">
              <div class="img-order">
                <img src="assets/web1.jpg" alt="">
              </div>
              <div class="desc-order">
                <div class="ctgr-order">
                  <p>category product</p>
                </div>
                <div class="name-product-order">
                  <p>nama product nya yang panjang</p>
                </div>
                <div class="price-order">
                  <p>Rp. 1.200.000</p>
                </div>
              </div>
            </div>
            <div class="row2-product">
              <div class="type">
                <p>Software</p>
              </div>
            </div>
            <div class="row3-product">
              <div class="col1">
                <p>Unit Price</p>
                <p>Rp. 1.000.000</p>
              </div>
              <div class="col2">
                <p>Qty</p>
                <p>2</p>
              </div>
              <div class="col2">
                <p>Total</p>
                <p>Rp. 2.000.000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="total-order">
          <div class="title-total">
            <p>Total</p>
          </div>
          <div class="total-price-order">
            <p><span>Total pesanan (3 produk) :</span> Rp. 4.000.000</p>
          </div>
        </div>
      </div>
    </div>
    <div class="left-content">
      <div class="title-order">
        <p>Order Details</p>
      </div>
      <div class="subtitle-order">
        <p>Fill and re-check your biodata to complete this step</p>
      </div>
      <div class="order-information">
        <div class="row-info">
          <p>Order Id</p>
          <p>912190238901283</p>
        </div>
        <div class="row-info">
          <p>Customer Id</p>
          <p>912190238901283</p>
        </div>
        <div class="row-info">
          <p>Name</p>
          <p>Kiagus Farhan Aziz Abas Nurohman</p>
        </div>
        <div class="row-info">
          <p>Phone Number</p>
          <p>081928192819</p>
        </div>
        <div class="row-info">
          <p>Email</p>
          <p>agusGansSlebeww1232@gmail.com</p>
        </div>
        <div class="btn-order">
          <button>Continue</button>
          <button>Cancel</button>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection