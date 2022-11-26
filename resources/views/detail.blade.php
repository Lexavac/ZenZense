@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/detail.css')}}">
@endsection

@section('content')
<div class="container">
  <div class="content">
    <div class="product">
      <div class="main-product">
        <img src="{{ $product->gallery->first()->getUrl() }}" alt="" id="main-product" onclick="prev(this)">
      </div>
      <div class="other-product">
        @foreach($product->gallery as $img)
        <div class="prev">
          <img src="{{ $img->getUrl() }}" alt="">
        </div>
        @endforeach
      </div>
    </div>
    <div class="description">
      <div class="name-product-main">
        <p>{{ $product->name }}</p>
      </div>
      <div id="rate">
        <div class="d-flex align-items-center">
          <div class="ratings">
            <i class="fa fa-star rating-color"></i>
            <i class=" fa fa-star rating-color"></i>
            <i class="fa fa-star rating-color"></i>
            <i class="fa fa-star rating-color"></i>
            <i class="fa fa-star"></i>
          </div>
          <h5 class="review-count">(12 product)</h5>
        </div>
      </div>
      <div class="main-price">
        <p>Rp. {{ $product->price }}</p>
      </div>
      <div class="info-product">
        <p>{{ $product->desc }}</p>
      </div>
      <div class="btn-product">
        <a href="checkout-delivery.html"><button class="btn-buy"><i class="fa-solid fa-bag-shopping"></i>Buy
            Now</button></a>
        <button class="btn-cart"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
      </div>
      <div class="profile">
        <div class="profile-img">
          <img src="{{ $seller->gallery->first()->getUrl() }}" alt="">
        </div>
        <div class="profile-name">
          <div class="name">
            <p>{{ $seller->name }}</p>
          </div>
          <div class="other">
            <a href="{{ route('shop.show.profile', $seller->slug) }}">Visit Shop <i class="fa-solid fa-shop"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="review">
    <div class="review-rate">
      <div class="title-reviews">
        <p>Customer Reviews</p>
      </div>
      <div class="title-rate">
        <p>4.8</p>
        <div id="rate">
          <div class="d-flex align-items-center">
            <div class="ratings">
              <i class="fa fa-star rating-color"></i>
              <i class=" fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star rating-color"></i>
              <i class="fa fa-star"></i>
            </div>
            <h5 class="review-count">(12 Reviews)</h5>
          </div>
        </div>
      </div>
      <div class="review-rating">
        <div class="five-rate">
          <div class="icon-star">
            <i class="fa fa-star rating-color"></i>
          </div>
          <div class="title-star">
            <p>5</p>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 90%; background-color: #29BB89;"
              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="four-rate">
          <div class="icon-star">
            <i class="fa fa-star rating-color"></i>
          </div>
          <div class="title-star">
            <p>4</p>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #7ECA9C;"
              aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="three-rate">
          <div class="icon-star">
            <i class="fa fa-star rating-color"></i>
          </div>
          <div class="title-star">
            <p>3</p>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 30%; background-color: #FFCC29;"
              aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="two-rate">
          <div class="icon-star">
            <i class="fa fa-star rating-color"></i>
          </div>
          <div class="title-star">
            <p>2</p>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #F58634;"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="one-rate">
          <div class="icon-star">
            <i class="fa fa-star rating-color"></i>
          </div>
          <div class="title-star">
            <p>1</p>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 5%; background-color: #FF4A4A;"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="other-comment">
      <div class="btn-see-more">
        <button id="btn-review" onClick="Open_click(this.id)">See More...</button>
      </div>
      <div class="btn-more"></div>
      <div class="comment">
        <div class="comment-user">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
      </div>
      <div class="comment">
        <div class="comment-user">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quam quae blanditiis
              quibusdam cupiditate. Quis eos dignissimos odio ducimus voluptates suscipit, vitae nisi harum voluptas
              sunt exercitationem eligendi nam omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Voluptatum corrupti fugiat officiis ratione error cum, quia, vero dicta praesentium, dignissimos ex a
              esse deserunt accusantium aliquid? Non, soluta eaque. Voluptas?</p>
          </div>
        </div>
      </div>
      <div class="comment">
        <div class="comment-user">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore unde quo doloribus
              perferendis neque consectetur iste dolore enim nostrum quam, omnis ab veniam! Praesentium rerum, alias
              aut ipsam tempora fuga!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="related">
    <div class="related-title">
      <div class="related-text">
        <p>Related Product</p>
      </div>
      <div class="see-more">
        <a href="#">See More...</a>
      </div>
    </div>
    <div class="related-product">
      @foreach($related_products as $related_product)
      <div class="card-product">
        <div class="img-card">
          <img src="{{ $related_product->gallery->first()->getUrl() }}" alt="">
        </div>
        <div class="desc-product">
          <div class="category-product">
            <p>{{ $related_product->slug }}</p>
          </div>
          <div class="name-product">
            <a href="{{ route('product.show', $related_product->slug) }}">{{ $related_product->name }}</a>
          </div>
          <div class="row-price">
            <div class="price">
              <p>Rp. {{ $related_product->price }}</p>
            </div>
            <div class="other-btn">
              <div class="btn-detail">
                <button><i class="fa-solid fa-cart-shopping"></i></button>
                <button>
                  <iconify-icon class="heart" icon="akar-icons:heart"></iconify-icon>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- end content -->

<!-- modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <p>{{ $product->name }}</p>
    </div>
    <div class="product">
      <div class="main-modal">
        <!-- <div class="modal-prev">
          <button><i class="fa-solid fa-caret-left"></i></button>
        </div> -->
        <div class="modal-product">
          <img src="" alt="" id="main-modal">
        </div>
        <!-- <div class="modal-next"> 
          <button><i class="fa-solid fa-caret-right"></i></button>
        </div> -->
      </div>
      <div class="other-modal">
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
<!-- modal -->
<div id="myRev" class="modalreview">
  <div class="modalreview-content">
    <div class="header">
      <span class="close close-rev">&times;</span>
    </div>
    <p class="cust-rev">Customer Review</p>
    <div class="review-modal scrollbar" id="style-3">
      <div class="comment force-overflow">
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>

        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
        <div class="comment-modal">
          <div class="profile-comment">
            <div class="profile-comment-img">
              <img src="assets/user.png" alt="">
            </div>
            <div class="profile-comment-name">
              <div class="name-comment">
                <p>Customers Name</p>
              </div>
              <div id="rate">
                <div class="d-flex align-items-center">
                  <div class="ratings">
                    <i class="fa fa-star rating-color"></i>
                    <i class=" fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star rating-color"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-comment">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel cum quibusdam eaque laboriosam,
              voluptate
              id molestiae consectetur ipsa tempore quas eum, recusandae beatae, delectus minus harum rerum
              architecto
              error modi!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('assets/js/detail.js')}}"></script>

@endsection
