@extends('layout/nav')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/cart.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="content">
    <div class="left-content">
      <div class="logo-cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <p>Your Cart</p>
        <p>(12)</p>
      </div>
      <div class="cart-content">
        <div class="check-all">
          <div class="check">
            <input type="checkbox" name="check" id="check">
            <label for="check">All</label>
          </div>
          <div class="delete">
            <button>Delete</button>
          </div>
        </div>
      </div>
      <div class="cart-product">
        <div class="header-cart">
          <input type="checkbox" name="check" id="check-item">
          <a href="">
            <iconify-icon class="store" icon="clarity:store-solid"></iconify-icon>
            <p>Nama toko</p>
          </a>
        </div>
        <div class="content-product">
          <img src="assets/web1.jpg" alt="">
          <div class="details-product">
            <div class="row-1">
              <div class="name">
                <p>Product Category</p>
                <p id="product-name">Product Name</p>
              </div>
              <p class="price" id="product-price">100.000</p>
            </div>

            <div class="row-2">
              <p class="type" id="type">Software</p>
              <div class="row-kanan">
                <div class="favs">
                  <button>
                    <iconify-icon class="heart" icon="akar-icons:heart"></iconify-icon>
                  </button>
                </div>
                <div class="quantity">
                  <iconify-icon class="trash" icon="fe:trash"></iconify-icon>
                  <button id="decrease">-</button>
                  <input type="text" value="1" id="quantity" name="quantity" >
                  <button id='increase'>+</button>
                </div>
              </div>
            </div>
            <!-- <p class="stock">Stock Available</p> -->
          </div>
        </div>
      </div>
    </div>

    <!-- card summary -->
    <div class="card-summary">
      <p class="summary">Summary</p>
      <div class="product" id="product" style="display: none;">
        <button>-</button>
        <div class="row1">
          <p id="name-summary">product name</p>
          <div class="price">
            <p id="quantity-summary">2</p>
            <p>x</p>
            <p id="price-summary">Rp. 230.000</p>
          </div>
        </div>
        <div class="row-2">
          <p class="software" id="label-summary">Software</p>
          <div class="subtotal">
            <p>Subtotal : </p>
            <p id="total-price">Rp. 460.000</p>
          </div>
        </div>
      </div>
      <div class="total" id="total" style="display: none;">
        <p>Total</p>
        <p id="total-summary">Rp. 1.380.000</p>
      </div>

      <div class="btn">
        <button style="background-color: #3333; color: black; cursor: no-drop;" id="btn-con" disabled>Continue</button>
      </div>
    </div>

  </div>
</div>
<script src="{{ asset('assets/js/cart.js')}}"></script>

@include('layout/footer')

@endsection
