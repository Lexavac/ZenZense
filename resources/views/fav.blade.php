@extends('layout/nav')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/fav.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="your-fav">
    <iconify-icon icon="akar-icons:heart" class="heart"></iconify-icon>
    <h3>Your Favorite</h3>
    <p>(Jumlah)</p>
  </div>

  <div class="content">
    <div class="card-row">
      <!-- left card -->
      <div class="card">
        <div class="header-card">
          <img src="assets/user.png" alt="">
          <p>Store Name</p>
        </div>
        <!-- start content -->
        <div class="content-card">
          <div class="left-row">
              <img src="assets/web3.jpg" alt="">
          <div class="details">
            <p class="category">Product Category</p>
            <p class="product-name">Product Name</p>
            <p class="type">Software</p>
          </div>
          </div>
        
          <div class="right-row">
            <p>RP.200.000</p>
            <div class="last-row">
              <button>Buy Now</button>
              <iconify-icon class="trash" icon="fe:trash"></iconify-icon>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="header-card">
          <img src="assets/user.png" alt="">
          <p>Store Name</p>
        </div>
        <!-- start content -->
        <div class="content-card">
          <div class="left-row">
              <img src="assets/web3.jpg" alt="">
          <div class="details">
            <p class="category">Product Category</p>
            <p class="product-name">Product Name</p>
            <p class="type">Software</p>
          </div>
          </div>
        
          <div class="right-row">
            <p>RP.200.000</p>
            <div class="last-row">
              <button>Buy Now</button>
              <iconify-icon class="trash" icon="fe:trash"></iconify-icon>
            </div>
          </div>
        </div>
      </div>

      
    </div>

    <div class="right-card">
       <div class="card-row">
      <div class="card">
        <div class="header-card">
          <img src="assets/user.png" alt="">
          <p>Store Name</p>
        </div>
        <!-- start content -->
        <div class="content-card">
          <div class="left-row">
              <img src="assets/web3.jpg" alt="">
          <div class="details">
            <p class="category">Product Category</p>
            <p class="product-name">Product Name</p>
            <p class="type">Software</p>
          </div>
          </div>
        
          <div class="right-row">
            <p>RP.200.000</p>
            <div class="last-row">
              <button>Buy Now</button>
              <iconify-icon class="trash" icon="fe:trash"></iconify-icon>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="header-card">
          <img src="assets/user.png" alt="">
          <p>Store Name</p>
        </div>
        <!-- start content -->
        <div class="content-card">
          <div class="left-row">
              <img src="assets/web3.jpg" alt="">
          <div class="details">
            <p class="category">Product Category</p>
            <p class="product-name">Product Name</p>
            <p class="type">Software</p>
          </div>
          </div>
        
          <div class="right-row">
            <p>RP.200.000</p>
            <div class="last-row">
              <button>Buy Now</button>
              <iconify-icon class="trash" icon="fe:trash"></iconify-icon>
            </div>
          </div>
        </div>
      </div>
    </div>


   
    </div>
  </div>

  <div class="page">
    <a href="" class="previous"><</a>
    <p>1</p>
    <a href="" class="next">></a>
  </div>
</div>


@include('layout/footer')

@endsection
