
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">

      @foreach($product as $products)

      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box">
          <a href="{{url('product_details',$products->id)}}">
            <div class="img-box">
              <img src="products/{{$products->image}}" alt="">
            </div>
            <div class="detail-box">
              <h6>{!!Str::limit($products->title,10)!!}</h6>
              <h6> Price
                <span>₱{{$products->price}}</span>
              </h6>
            </div>
          </a>
          <div class="d-flex justify-content-center mt-2">
            <a href="{{url('add_cart',$products->id)}}" class="btn btn-success" style="text-decoration: none; color: white;">
              Add to Cart
            </a>
          </div>
        </div>
      </div>

      @endforeach

    </div>
  </div>
</section>

<style>
  .box {
    background-color: #D2B48C; /* Light brown color */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, background-color 0.3s; /* Added transition for background-color */
  }

  .box:hover {
    transform: translateY(-10px);
    background-color: #FFDAB9; /* Peach color on hover */
  }

  .img-box img {
    width: 100%;
    border-radius: 8px;
  }

  .detail-box {
    text-align: center;
    margin-top: 10px;
  }

  .detail-box h6 {
    margin: 5px 0;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .d-flex {
    display: flex;
    justify-content: center;
  }
</style>
