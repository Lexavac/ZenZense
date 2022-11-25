@extends('layout/main')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/checkout.css')}}">
@endsection

@section('content')

<div class="main-content">
  <header>
    <div class="left-header">
      <div class="img-header">
        <img src="{{ asset('assets/img/logo.png')}}" alt="">
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
        <div class="scs"><p>&#10004;</p></div>
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
      <div class="shipping-method">
        <div class="title-shipping">
          <p>Available shipping method</p>
        </div>
        <div class="method">
          <form action="">
            <div class="card-shipping">
              <div class="left-shiping">
                <div class="shipping-logo">
                  <img src="assets/tes-img.png" alt="">
                </div>
                <div class="shipping-delivery">
                  <p>Fedex Delivery</p>
                  <p>Delivery 2-3 days work</p>
                </div>
              </div>
              <div class="right-shipping">
                <p>Rp. 200.000</p>
                <input type="checkbox" name="" id="">
              </div>
            </div>
          </form>
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
      <div class="order-info">
        <form action="">
          <div class="email">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Email">
          </div>
          <div class="receiver">
            <label for="receiver">receiver Name</label>
            <input type="receiver" name="receiver" id="receiver" placeholder="Name">
          </div>
          <div class="address">
            <label for="address">Address</label>
            <textarea name="" id="" cols="50" rows="5" placeholder="Type your address here"></textarea>
          </div>
          <div class="payment">
            <div class="title-payment">
              <p>Payment Method</p>
            </div>
            <div class="card-payment">
              <div class="left-payment">
                <div class="payment-logo">
                  <img src="assets/tes-img.png" alt="">
                </div>
                <div class="payment-method">
                  <p>Paypal</p>
                </div>
              </div>
              <div class="right-payment">
                <input type="checkbox" name="" id="">
              </div>
            </div>
          </div>
        <div class="btn-order">
          <button>Continue</button>
          <button>Cancel</button>
        </div>
      </form>
      </div>
    </div>
  </div>

</div>

@endsection