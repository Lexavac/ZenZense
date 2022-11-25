@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/shop.css')}}">
@endsection

@section('content')

<div class="content">
  <div class="card-profile">
    <div class="img-profile">
      <img src="assets/ALM00016.JPG" alt="" id="img-profile">
    </div>
    <div class="desc-shop">
      <div class="name-shop">
        <p>Nurul Mart</p>
      </div>
      <div class="name-seller">
        <p>seller Name : Homisah</p>
      </div>
      <div class="description">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque adipisci fuga, error illum doloremque harum exercitationem ratione. Ipsam quisquam quam cumque! Pariatur laudantium fugit odit? Architecto minima adipisci temporibus incidunt!</p>
      </div>
      <div class="total-product">
        <p>Total Product</p>
        <p>8</p>
      </div>
      <div class="rate-shop">
        <i class="fa fa-star" aria-hidden="true"></i>
        <p>Rating 4.9</p>
      </div>
    </div>
    <div class="seller-since">
      <p>Seller since 20 desember 2020</p>
    </div>
  </div>
  <div class="content-product">
    <div class="header-product">
      <div class="filter-dropdown">
        <label for="filter"><i class="fa fa-bars" aria-hidden="true"></i></label>
        <select name="filter" id="filter" class="option-filter">
          <option value="popular">Popular</option>
        </select>
      </div>
    </div>
    <div class="product-product">
      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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

      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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

      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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
      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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

      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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

      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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
      <div class="card-product">
        <div class="img-card">
          <img src="assets/web1.jpg" alt="" id="img-prod">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p id="ctgry">Design Web</p>
          </div>
          <div class="name-product">
            <p id="name-prod">Landing page for Art Gallery</p>
          </div>
          <div class="row-price">
            <div class="price">
              <p id="prc-prod">Rp. 100.000</p>
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

    </div>
  </div>
</div>

@endsection
