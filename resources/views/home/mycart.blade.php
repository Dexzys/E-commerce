<!DOCTYPE html>
<html>

<head>
  
@include('home.css')

<style type="text/css">

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        margin: 60px;
    }

    table
    {
        border: 2px solid black;
        text-align: center;
        margin: 10px;
        width: 800px;
    }

    th
    {
        border: 2px solid black;
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: bold;
        background-color: #f6b092;
        margin: 10px;
    }

    td
    {
        border: 2px solid black;
        margin: 5px;
    }

    .cart_value
    {
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
    }

    .order_deg
    {
        padding-right: 100px;
        margin-top: -50px;
    }
    
    label
    {
        display: inline-block;
        width: 150px;
    }

    .div_gap
    {
        padding: 20px;
    }

    /* Additional Styles for the Card */
    .card {
        border: 2px solid #7b1717;
        border-radius: 10px;
        padding: 20px;
        background-color: #f9f9f9;
    }

    
    /* Style for pagination links */
    .pagination li a {
        color: red; /* Change to your desired color */
        /* Add any additional styles here */
    }

    /* Style for active pagination link */
    .pagination li.active a {
        color: red; /* Change to your desired active color */
        /* Add any additional styles here */
    }
</style>



</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    
  </div>
 

<div class="div_deg">

    <table>

    <tr>

    <th>Product Title</th>

    <th>Price</th>

    <th>Image</th>

    <th>Delete</th>

    </tr>

    <?php

    $totalValue = 0; // Initialize total value variable

    ?>

    @foreach($cart as $carts)

    <tr>

    <td>{{$carts->product->title}}</td>

    <td>₱{{$carts->product->price}}</td>

    <td>
        <img width="150" height="150" src="/products/{{$carts->product->image}}">
    </td>

    <td>

                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_cart',$carts->id)}}">Remove</a>

                </td>

    </tr>

    <?php
        $totalValue += $carts->product->price;
    ?>

    @endforeach

    </table>
    
</div>
<div class="div_deg">

{{$cart->onEachSide(1)->links()}}

</div>


<!-- Place the order_deg card here -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="{{url('confirm_order')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Receiver Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group">
                        <label for="address">Receiver Address</label>
                        <textarea name="address" id="address" class="form-control">{{Auth::user()->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">Receiver Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{Auth::user()->phone}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End order_deg card -->

<div class="cart_value">

    <h3>Total Value of Cart is : ₱{{$totalValue}}</h3>

</div>

@yield('content')

<script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        swal({
            title: "Are You Sure You Want To Delete This Order?",
            text: "This Delete Will Be Permanent",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willCancel)=>{
            if(willCancel) {
                window.location.href=urlToRedirect;
            }
        });
    }
</script>

<script>
    (function() {
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    })();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Crochet
          <a href="https://html.design/">With Us</a>
        </p>
      </div>
    </footer>

  </section>

</body>

</html>