<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <style>
    .product-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 3px solid #7b1717;
      width: 300px;
      border-radius: 10px;
      overflow: hidden;
      margin: 20px;
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
      margin-top: 30px;
      margin-bottom: 30px;
      justify-content: center;
      align-items: center;
    }

    .container-with-margin-top {
      margin-top: 80px;
      border-radius: 10px
    }

    .navbar-nav .nav-item:hover .nav-link {
      background-color: whitesmoke;
    }
  </style>
</head>
<body>
<header class="header_section" style="border: none; padding: 0; margin: 0; width: 100%">
  <nav style="margin-top: 20px;" class="navbar navbar-expand-lg custom_nav-container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" href="/home/index.blade.php">
        <img style="width: 75px; position: relative; left: -50px;" src="images/dddd.png">
        <span style="font-size: 40px; position: relative; top: 10px; left: -50px;">
          Re'Vive
        </span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link{{ request()->is('/') ? ' active' : '' }}" href="{{ url('/') }}">
            <i class="bi bi-person-lines-fill"></i> Home <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('product') ? ' active' : '' }}" href="{{ url('/product') }}">
            <i class="bi bi-person-lines-fill"></i> Shop <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('myorders') ? ' active' : '' }}" href="{{url('myorders')}}">
            <i class="bi bi-person-lines-fill"></i> MY ORDERS <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('contact_us') ? ' active' : '' }}" href="{{ url('/contact_us') }}">
            <i class="bi bi-person-lines-fill"></i> CONTACT US <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('about_us') ? ' active' : '' }}" href="{{ url('/about_us') }}">
            <i class="bi bi-person-lines-fill"></i> ABOUT US <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{ request()->is('privacy_policy') ? ' active' : '' }}" href="{{ url('/privacy_policy') }}">
            <i class="bi bi-person-lines-fill"></i> PRIVACY POLICY <span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
      <div class="user_option">
        @if (Route::has('login'))
        @auth
        <a class="nav-link{{ request()->is('mycart') ? ' active' : '' }}" href="{{url('mycart')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
          </svg>
          [{{$count}}]
        </a>
        <div class="d-flex justify-content-center mt-2">
          <a href="#" onclick="logoutConfirmation(event)" style="text-decoration: none;">
            <div class="btn btn-danger">Logout</div>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
        @else
        <a href="{{url('/login')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
          </svg>
          <span>
            Login
          </span>
        </a>
        <a href="{{url('/register')}}">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z" />
          </svg>
          <span>
            Register
          </span>
        </a>
        @endauth
        @endif
      </div>
    </div>
  </nav>
</header>

<script>
  document.querySelectorAll('.nav-link').forEach(link => {
    if (link.classList.contains('active')) {
      link.style.backgroundColor = 'white';
    }

    link.addEventListener('click', function () {
      document.querySelectorAll('.nav-link').forEach(otherLink => {
        otherLink.style.backgroundColor = ''; // Reset other links
      });
      this.style.backgroundColor = 'white';
    });
  });

  function logoutConfirmation(event) {
    event.preventDefault();
    Swal.fire({
      title: 'Confirm Logout',
      text: 'Are you sure you want to logout?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Logout',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        document.getElementById('logout-form').submit();
      }
    });
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
