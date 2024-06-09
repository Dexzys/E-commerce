<!DOCTYPE html>
<html>

<head>
  
@include('home.css')

<style type="text/css">
  /* footer section*/
.footer_section {
  margin-top: 45px;
  font-weight: 500;
}

.footer_section p {
  padding: 20px 0;
  margin: 0 auto;
  text-align: center;
  border-top: 1.5px solid #eeeeee;
  width: 80%;
}

.footer_section a {
  color: #cbc9c9;
}

/* end footer section*/
</style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.all_products')

  <!-- end shop section -->





   

  <!-- info section -->
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
    
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> 
          <a href="https://html.design/">Re'Vive</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->

</body>

</html>