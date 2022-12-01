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
        <div>
          <a class="btn-cart" href="{{ url('cart', $product->id) }}"><i class="fa-solid fa-cart-shopping"></i>Add to cart</a>
          @if(session()->has('message'))
          <p>{{ session()->get('message') }}</p>
          @endif
        </div>
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
        <p>4.9</p>
        <div id="rate">
          <div class="d-flex align-items-center">
            <div class="ratings">
              <i class="fa fa-star rating-color"></i>
            </div>
            <h5 class="review-count">( {{ $ratings->count() }} Reviews )</h5>
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
            <progress id="progress5" class="progress-bar"
              value="{{ $star5 }}" max="{{ $ratings->count() }}"></progress>
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
            <progress id="progress4" class="progress-bar"
              value="{{ $star4 }}" max="{{ $ratings->count() }}"></progress>
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
            <progress id="progress3" class="progress-bar" role="progressbar" 
              value="{{ $star3 }}" max="{{ $ratings->count() }}"></progress>
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
            <progress id="progress2" class="progress-bar" role="progressbar" 
              value="{{ $star2 }}" max="{{ $ratings->count() }}"></progress>
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
            <progress id="progress1" class="progress-bar" role="progressbar" 
                value="{{ $star1 }}" max="{{ $ratings->count() }}"></progress>
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
      <!--- y -->
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
            <p>{{ $related_product->major }}</p>
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


<div class="content">

  <div class="content-review">
      <div class="card-review">
          <form action="{{ url('/add-rating')}}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
              <div class="header-card">
                  <i class="fas fa-store    "></i>
                  <p>{{ $seller->name }}</p>
              </div>
              <div class="row-product-review">
                  <div class="left-rev">
                      <div class="img-rev">
                          <img src="assets/web1.jpg" alt="">
                      </div>
                      <div class="desc-rev">
                          <div class="name-rev">
                              <p>{{ $product->name }}</p>
                          </div>
                          <div class="title-rev">
                              <p>What is overall quality of this product?</p>
                          </div>
                          <div class="star-widget">
                              <input type="radio" name="product_rating" id="rate-5" value="5">
                              <label for="rate-5" class="fas fa-star"></label>
                              <input type="radio" name="product_rating" id="rate-4" value="4">
                              <label for="rate-4" class="fas fa-star"></label>
                              <input type="radio" name="product_rating" id="rate-3" value="3">
                              <label for="rate-3" class="fas fa-star"></label>
                              <input type="radio" name="product_rating" id="rate-2" value="2">
                              <label for="rate-2" class="fas fa-star"></label>
                              <input type="radio" name="product_rating" id="rate-1" value="1">
                              <label for="rate-1" class="fas fa-star"></label>
                          </div>
                      </div>
                  </div>
                  <div class="right-rev">
                      <label for="user">Show this review as..</label>
                      <select name="name" id="user">
                        <option value="{{ Auth()->user()->name }}" checked>{{ Auth()->user()->name }}</option>
                          <option value="anonymous"> Anonymous</option>
                      </select>
                  </div>
              </div>
              <div class="row-comment">
                  <div class="comment-rev">
                      <textarea name="comment" cols="167" rows="4" placeholder="Give us your honey review"></textarea>
                  </div>
              </div>
              <div class="btn-submit">
                  <button type="submit" name="submit" id="submit">Submit</button>
              </div>
          </form>
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
