@extends('layout/app')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/edit-product.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="content-title">
        <h2>Edit Product</h2>
    </div>

    <div class="container-content">

        <div class="product-name">
            <label for="product-name">Product Name</label>
            <input type="text">
        </div>
        <div class="desc">
            <label for="desc">Description</label>
            <textarea name="" id="" cols="150" rows="5"></textarea>
        </div>

        <div class="double-row">
            <div class="left-row">

                <div class="product-category">
                    <label for="">Product Category</label>
                    <input type="text">
                </div>
                <div class="product-tipe">
                    <label for="product-tipe">Product Tipe</label>
                    <input type="radio" name="product-tipe">
                    <label for="software">Software</label>
                    <input type="radio" name="product-tipe">
                    <label for="hardware">Hardware</label>
                </div>
                <div class="price">
                    <label for="price">Price</label>
                    <input type="number">
                </div>
                <div class="related-tags">
                    <label for="related-tags">Related Tags</label>
                    <div class="tags"></div>
                </div>
            </div>
            <div class="right-row">
                <div class="stock">
                    <label for="stock">Stock</label>
                    <input type="number">
                </div>
                <div class="product-image">
                    <label for="product-image">Product Image</label>
                    <div class="image"></div>
                </div>
                <div class="btn">
                    <button class="cancle">Cancle</button>
                    <button class="upload">Save Edit</button>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection