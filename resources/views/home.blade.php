@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/home.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="header-content">
    <div class="left-row">
      <div class="best-quality">
        <div class="box-quality">
          <div class="row-left">
            <iconify-icon icon="ic:sharp-verified-user" style="font-size: 60px; color:  #5874AF ;">
            </iconify-icon>
            <p>Best <br> Quality</p>
          </div>
          <div class="row-right"></div>
        </div>
      </div>
      <div class="secure-payment">
        <div class="box-payment">
          <div class="row-left"></div>
          <div class="row-right">
            <iconify-icon icon="ci:credit-card" style="font-size: 60px; color:  #5874AF"></iconify-icon>
            <p>Secure <br> Payment</p>
          </div>
        </div>
      </div>
      <div class="other-box">
        <div class="box-other">
          <div class="row-left">
            <iconify-icon icon="akar-icons:gear" style="font-size: 60px; color:  #5874AF ;"></iconify-icon>
            <p>Tried & <br> Tested</p>
          </div>
          <div class="row-right"></div>
        </div>
      </div>
    </div>
    <div class="middle-row">
      <h1>Our Quality Ask Be</h1>
      <div class="middle-title">
        <h1>Different</h1>
      </div>
      <div class="box-top-left"></div>
      <div class="box-bottom-left"></div>
      <div class="box-top-right"></div>
      <div class="box-bottom-right"></div>
      <div class="btn-explore">
        <a href="{{ route('product') }}">
          <button>Explore Now!</button>
        </a>
      </div>
    </div>
    <div class="right-row">
      <div class="secure-payment">
        <div class="box-payment">
          <div class="row-left"></div>
          <div class="row-right">
            <iconify-icon icon="ci:credit-card" style="font-size: 60px; color:  #5874AF"></iconify-icon>
            <p>Secure <br> Payment</p>
          </div>
        </div>
      </div>
      <div class="best-quality">
        <div class="box-quality">
          <div class="row-left">
            <iconify-icon icon="ic:sharp-verified-user" style="font-size: 60px; color:  #5874AF ;">
            </iconify-icon>
            <p>Best <br> Quality</p>
          </div>
          <div class="row-right"></div>
        </div>
      </div>
      <div class="secure-payment">
        <div class="box-payment">
          <div class="row-left"></div>
          <div class="row-right">
            <iconify-icon icon="akar-icons:gear" style="font-size: 60px; color:  #5874AF ;"></iconify-icon>
            <p>Tried & <br> Tested</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sorted">
    <h3>We Sorted Our Product By</h3>
    <div class="jurusan">
      <div class="bc">
        <img src="{{ asset('assets/img/bc.png')}}" alt="">
      </div>
      <div class="mm">
        <img src="{{ asset('assets/img/mm.png')}}" alt="">
      </div>
      <div class="rpl">
        <img src="{{ asset('assets/img/rpl.png')}}" alt="">
      </div>
      <div class="tjkt">
        <img src="{{ asset('assets/img/tjkt.png')}}" alt="">
      </div>
      <div class="te">
        <img src="{{ asset('assets/img/te.png')}}" alt="">
      </div>
    </div>
  </div>
  <div class="featured-product">
    <h1>Featured Product</h1>
    <h2>This Week</h2>
    <div class="product">
      <div class="img-product">
        <img src="assets/web2.jpg" alt="">
      </div>
      <div class="desc-product">
        <div class="name-product">
          <h3>Template Website</h3>
        </div>
        <div class="price-featured">
          <p>Rp. 150.000</p>
        </div>
        <div class="description">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, repellendus molestias. Accusamus
            doloremque ad minima harum explicabo voluptates iste vitae magni. Itaque dolorum reprehenderit odit
            voluptatum provident magnam modi tempore.</p>
        </div>
        <div class="btn-featured">
          <a href="checkout-delivery.html"><button class="btn-buy"><i class="fa-solid fa-bag-shopping"></i>Buy
              Now</button></a>
          <button class="btn-cart"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
        </div>
      </div>
    </div>
  </div>
  <div class="our-product">
    <h1>Our Product</h1>
    <div class="our-category">
      <button>Software</button>
      <button>Electronics</button>
      <button>Hardware</button>
      <button>Movies</button>
      <button>Design</button>
    </div>

      <div id="wrapper">
        <div id="carousel">
          <div id="content">
            <div class="product-carousel">
              <div class="row-product">
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button>
                          <iconify-icon class="heart" icon="akar-icons:heart"></iconify-icon>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-product">
                  <div class="img-card">
                    <img src="assets/web1.jpg" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>Design Web</p>
                    </div>
                    <div class="name-product">
                      <p style="width: 200px;">Landing page for Art Gallery</p>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp. 100.000</p>
                      </div>
                      <div class="button-detail">
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                        <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
        <button id="prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" fill="white"/>
          </svg>
        </button>
        <button id="next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" >
            <path fill="none" d="M0 0h24v24H0V0z" />
            <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" fill="white"/>
          </svg>
        </button>
      </div>
    <div class="our-btn">
      <a href="search-page.html">
        <button>All Category</button>
      </a>
    </div>
  </div>
</div>
<script src="{{ asset('assets/js/home.js')}}"></script>

@endsection
