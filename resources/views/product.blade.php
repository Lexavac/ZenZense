@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/product.css')}}">
@endsection

@section('content')

<div class="content">
  <div class="filter-content">
    <div class="filter">
      <div class="header-filter">
        <p>Filter</p>
      </div>
      <form action="" method="GET">
      <div class="major">
        <div class="header-major">
          <p>Major</p>
        </div>
        <div class="list-major">
          <ul class="menu-major">
            <li>
              <label for="check1">
                <div class="list-item">
                  <div class="img-major">
                    <img src="{{ asset('assets/img/bc.png')}}" alt="">
                  </div>
                  <div class="title-major">
                    <p>Broadcast</p>
                  </div>
                </div>
              </label>
              <div class="checklist-major">
                <input type="checkbox" name="BRF" id="check1">
              </div>
            </li>
            <li>
              <label for="check2">
                <div class="list-item">
                  <div class="img-major">
                    <img src="{{ asset('assets/img/mm.pn')}}g" alt="">
                  </div>
                  <div class="title-major">
                    <p>Multimedia</p>
                  </div>
                </div>
              </label>
              <div class="checklist-major">
                <input type="checkbox" name="ANIMASI" id="check2">
              </div>
            </li>
            <li>
              <label for="check3">
                <div class="list-item">
                  <div class="img-major">
                    <img src="{{ asset('assets/img/rpl.png')}}" alt="check3">
                  </div>
                  <div class="title-major">
                    <p>PPLG</p>
                  </div>
                </div>
              </label>
              <div class="checklist-major">
                <input type="checkbox" name="PPLG" id="check3">
              </div>
            </li>
            <li>
              <label for="check4">
                <div class="list-item">
                  <div class="img-major">
                    <img src="{{ asset('assets/img/tjkt.png')}}" alt="">
                  </div>
                  <div class="title-major">
                    <p>TJKT</p>
                  </div>
                </div>
              </label>
              <div class="checklist-major">
                <input type="checkbox" name="TJKT" id="check4">
              </div>
            </li>
            <li>
              <label for="check5">
                <div class="list-item">
                  <div class="img-major">
                    <img src="{{ asset('assets/img/te.png')}}" alt="">
                  </div>
                  <div class="title-major">
                    <p>TE</p>
                  </div>
                </div>
              </label>
              <div class="checklist-major">
                <input type="checkbox" name="TE" id="check5">
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="price-filter">
        <div class="header-price">
          <p>Price</p>
        </div>
        <div class="price-inp">
          <div class="min-price">
            <label for="min">Min</label>
            <input type="number" name="min" id="min" placeholder="Rp.">
          </div>
          <div class="max-price">
            <label for="max">Max</label>
            <input type="number" name="max" id="max" placeholder="Rp.">
          </div>
          <button type="submit"></button>
        </div>
      </div>
      </form>
      <div class="category-filter">
        <div class="header-category">
          <p>Category</p>
        </div>
        <ul class="menu-category">
          <li>
            <label for="soft">Software</label>
            <input type="checkbox" name="soft" id="soft">
          </li>
          <li>
            <label for="hard">Hardware</label>
            <input type="checkbox" name="hard" id="hard">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="main-content">
    <div class="product-content">
      <div class="header-product-content">
        <!-- <ul class="breadcrumb">
          <li><a href="loginseller.html">Home</a></li>
          <li>explore</li>
        </ul> -->
        <div class="title-content">
          <p>Explore</p>
        </div>
        <div class="filter-product">
          <div class="filter-label">
            <div class="label-menu">
              <p>Broadcast</p>
            </div>
            <div class="label-menu">
              <p>Broadcast</p>
            </div>
            <div class="label-menu">
              <p>Broadcast</p>
            </div>
          </div>
          <div class="filter-dropdown">
            <label for="filter"><i class="fa fa-bars" aria-hidden="true"></i></label>
            <select name="filter" id="filter" class="option-filter">
              <option value="popular">Popular</option>
            </select>
          </div>
        </div>
        <div class="product">
          <div class="row-top-product">
            @foreach($products as $product)
            <div class="card-product">
              <div class="img-card">
                <img src="{{ $product->gallery->first()->getUrl() }}" alt="" id="img-prod">
              </div>
              <div class="desc-product">
                <div class="category-product">
                  <p id="ctgry">Design Web</p>
                </div>
                <div class="name-product">
                  <a href="{{ route('product.show', $product->slug) }}">
                    <p id="name-prod">{{ $product->name }}</p>
                  </a>
                </div>
                <div class="row-price">
                  <div class="price">
                    <p id="prc-prod">Rp. {{ $product->price }}</p>
                  </div>
                  <div class="other-btn">
                    <div class="btn-detail">
                       <button class="modal__button" id="open-modal" onClick="Open_click(this.id)"><i class="fa-solid fa-cart-shopping"></i></button>
                      <button><i class="fa fa-heart" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal__container" id="modal-container">
    <div class="modal__content">
      <div class="header">Add to Cart</div>
      <div class="cart-content">
        <div class="left-modal">
          <div class="img-modal">
            <img src="" alt=""  id="img-cart-modal">
          </div>
          <div class="desc-modal">
            <p id="ctgry-cart-modal"></p>
            <p id="name-cart-modal"></p>
            <p id="">Software</p>
          </div>
        </div>
        <div class="right-modal">
          <p id="price-cart-modal"></p>
        </div>
      </div>
    </div>
</div>

<script src="{{ asset('assets/js/cartmodal.js')}}"></script>

@endsection
