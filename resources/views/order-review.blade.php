@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/order-review.css')}}">
@endsection

@section('content')

<div class="content">
    <div class="header-review">
        <p>Product Review</p>
    </div>
    <div class="content-review">
        <div class="card-review">
            <form action="">
                <div class="header-card">
                    <i class="fas fa-store    "></i>
                    <p>Nama Toko</p>
                </div>
                <div class="row-product-review">
                    <div class="left-rev">
                        <div class="img-rev">
                            <img src="assets/web1.jpg" alt="">
                        </div>
                        <div class="desc-rev">
                            <div class="name-rev">
                                <p>Web Design LandingPage</p>
                            </div>
                            <div class="title-rev">
                                <p>What is overall quality of this product?</p>
                            </div>
                            <div class="star-widget">
                                <input type="radio" name="rate" id="rate-5">
                                <label for="rate-5" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-4">
                                <label for="rate-4" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-3">
                                <label for="rate-3" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-2">
                                <label for="rate-2" class="fas fa-star"></label>
                                <input type="radio" name="rate" id="rate-1">
                                <label for="rate-1" class="fas fa-star"></label>
                            </div>
                        </div>
                    </div>
                    <div class="right-rev">
                        <label for="user">Show this review as..</label>
                        <select name="user" id="user">
                            <option value="anonymous"> Anonymous</option>
                            <option value="anonymous">Username</option>
                        </select>
                    </div>
                </div>
                <div class="row-comment">
                    <div class="comment-rev">
                        <textarea name="" id="" cols="167" rows="4" placeholder="Give us your honey review"></textarea>
                    </div>
                </div>
                <div class="btn-submit">
                    <input type="submit" name="submit" id="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/cartmodal.js')}}"></script>

@endsection
