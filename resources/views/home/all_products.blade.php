<style>
  .product-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 3px solid #7b1717;
    width: 280px;
    border-radius: 10px;
    overflow: hidden;
    margin: 10px; /* Add margin to product card */
  }

  .product-card:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px red;
    border: 3px solid pink;
  }

  .product-card .img-box {
    overflow: hidden;
  }

  .product-card .img-box img {
    width: 100%;
    border-bottom: 1px solid #ddd;
    transition: transform 0.3s ease;
  }

  .product-card:hover .img-box img {
    transform: scale(1.05);
  }

  .product-card .detail-box {
    padding: 10px;
    text-align: center;
  }

  .product-card .detail-box h5 {
    margin: 10px 0;
  }

  .product-card .detail-box span {
    color: #ff5722;
    font-weight: bold;
  }

  .product-card .center-button {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 15px;
  }

  h5 {
    display: flex;
    margin-top: 20px;
    justify-content: center;
    align-items: center;
  }
  .product-card .center-button .btn {
    color: white;
}
</style>

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2 style="color: brown;">All Products</h2>
    </div>
    
    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3 custom-margin">
        <a href="{{url('product_details',$products->id)}}">
          <div class="box product-card">
            <h5>{{$products->category}}</h5>
            <div class="img-box">
              <img src="products/{{$products->image}}" alt="{{$products->title}}">
            </div>
            <div class="detail-box">
              <h6>{!!Str::limit($products->title,10)!!}</h6>
              <h6>Price: <span style="color:white">₱{{$products->price}}</span></h6>
            </div>
            <div class="center-button">
              <a class="btn btn-success" href="{{url('add_cart', $products->id)}}">Add To Cart</a>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
