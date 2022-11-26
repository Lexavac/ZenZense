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
        <a href="{{ route('product.cate.filter') }}">
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
      <a href="{{ url('/product?BRF=on') }}">
      <div class="bc">
        <img src="{{ asset('assets/img/bc.png')}}" alt="">
      </div>
      </a>
      <a href="{{ url('/product?ANIMASI=on') }}">
        <div class="mm">
          <img src="{{ asset('assets/img/mm.png')}}" alt="">
        </div>
      </a>
      <a href="{{ url('/product?PPLG=on') }}">
        <div class="rpl">
          <img src="{{ asset('assets/img/rpl.png')}}" alt="">
        </div>
      </a>
      <a href="{{ url('/product?TJKT=on') }}">
        <div class="tjkt">
          <img src="{{ asset('assets/img/tjkt.png')}}" alt="">
        </div>
      </a>
      <a href="{{ url('/product?TE') }}">
        <div class="te">
          <img src="{{ asset('assets/img/te.png')}}" alt="">
        </div>
      </a>
    </div>
  </div>
  <div class="featured-product">
    <h1>Featured Product</h1>
    <h2>This Week</h2>
    <div class="product">
      <div class="img-product">
        <img src="{{ $products->last()->gallery->first()->getUrl() }}" alt="">
      </div>
      <div class="desc-product">
        <div class="name-product">
          <h3>{{ $products->last()->name }}</h3>
        </div>
        <div class="price-featured">
          <p>{{ 'Rp.'.$products->last()->price }}</p>
        </div>
        <div class="description">
          <p>{{ $products->last()->desc }}</p>
        </div>
        <div class="btn-featured">
          <a href="checkout-delivery.html"><button class="btn-buy"><i class="fa-solid fa-bag-shopping">

          </i>Buy Now</button></a>
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

              @foreach($products as $product)
                <div class="card-product">
                  <div class="img-card">
                    <img src="{{ $product->gallery->first()->getUrl() }}" alt="">
                  </div>
                  <div class="desc-product">
                    <div class="category-product">
                      <p>{{ $product->major }}</p>
                    </div>
                    <div class="name-product">
                      <a style="width: 150px; display:inline-block;" href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                    </div>
                    <div class="row-price">
                      <div class="price">
                        <p>Rp.{{ $product->price }}</p>
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
              @endforeach


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
      <a href="{{ url('product') }}">
        <button>All Category</button>
      </a>
    </div>
  </div>
</div>

<footer>
  <div class="footer">
    <div class="konten">
      <div class="kategori">
        <ul>
          <li>
            <p>Kategori</p>
          </li>
          <li><a href="">RPL</a></li>
          <li><a href="">TJKT</a></li>
          <li><a href="">BRC</a></li>
          <li><a href="">TE</a></li>
          <li><a href="">Animasi</a></li>
        </ul>
      </div>
      <div class="help-center">
        <ul>
          <li>
            <p>Help Center</p>
          </li>
          <li><a href="">FAQS</a></li>
          <li><a href="">Terms & Conditions</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="school-info">
        <ul>
          <li>
            <p>School Info</p>
          </li>
          <li><a
              href="https://smktarunabhakti.net/index.php/whytarbak-before-import/identitas-sekolah-before-import/">About
              Us</a>
          </li>
          <li><a
              href="https://smktarunabhakti.net/index.php/struktur-kurikulum-sekolah-menengah-kejuruan-madrasah-aliyah-kejuruan-before-import/">Curicullum</a>
          </li>
          <li><a
              href="https://smktarunabhakti.net/index.php/kurikulum-before-import/kompetensi-keahlian-smk-taruna-bhakti-before-import/">Subject</a>
          </li>
        </ul>
      </div>

      <div class="logo-copyright">
        <img src="{{ asset('assets/img/logoTb.png')}}" alt="">
        <p>Copyright ©2022 SMK Taruna Bhakti </p>
      </div>
    </div>
    <div class="sosmed">
      <p>Contact Us</p>
      <ul>
        <li>
          <a href="https://www.instagram.com/smktarunabhakti.depok/">
            <img src="{{ asset('assets/img/instagram.png')}}" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/c/SMKTarunaBhaktiDepok">
            <img src="{{ asset('assets/img/youtube.png')}}" alt="">
          </a>
        </li>
        <li>
          <a href="https://www.facebook.com/smktarunabhaktidepok">
            <img src="{{ asset('assets/img/facebook.png')}}" alt="">
          </a></li>

        <li>
          <a href="https://mail.google.com/mail/u/0/?hl=en#inbox">
            <img src="{{ asset('assets/img/email.png')}}" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>

<script src="{{ asset('assets/js/home.js')}}"></script>

@endsection
