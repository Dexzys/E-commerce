@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>
        
        @if($products->isEmpty())
            <p>No products found.</p>
        @else
            <div class="row">
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <a href="{{ url('product_details', $product->id) }}">
                                <div class="img-box">
                                    <img src="/products/{{ $product->image }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>{{ Str::limit($product->title, 10) }}</h6>
                                    <h6>Price
                                        <span>${{ $product->price }}</span>
                                    </h6>
                                </div>
                            </a>
                            <div class="d-flex justify-content-center mt-2">
                                <a href="{{ url('add_cart', $product->id) }}" class="btn btn-primary" style="text-decoration: none; color: white;">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection