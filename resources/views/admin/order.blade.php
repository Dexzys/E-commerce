<!DOCTYPE html>
<html>

<head>
  @include('admin.css')

  <style>
    table {
      width: 80%;
      border-collapse: collapse;
      margin: 20px 0;
      font-size: 16px;
      text-align: center;
      color: #333;
    }
    .page-content {
      max-height: 500px; /* Set the desired height for the scrollbar */
      overflow-y: auto; /* Enable vertical scrollbar */
      overflow-x: auto; /* Enable horizontal scrollbar if needed */

    }

    th,
    td {
      padding: 12px 15px;
      border: 1px solid black;
    }

    th {
      background-color: #f6b092;
      color: black;
      font-size: 18px;
      font-weight: bold;
    }

    tr {
      background-color: #f8f8f8;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-of-type(even) {
      background-color: #f0f8ff;
    }

    tr:hover {
      background-color: #e0ffff;
    }

    td img {
      width: 150px;
      border-radius: 7px;
    }

    .status-red {
      color: red;
      font-weight: bold;
    }

    .status-skyblue {
      color: #4682B4;
      font-weight: bold;
    }

    .status-green {
      color: #20B2AA;
      font-weight: bold;
    }

    .table_center {
      
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .btn {
      margin: 5px;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 14px;
    }

    .btn-primary {
      background-color: #4682B4;
      color: white;
      border: none;
    }

    .btn-success {
      background-color: #20B2AA;
      color: white;
      border: none;
    }

    .btn-secondary {
      background-color: #6A5ACD;
      color: white;
      border: none;
    }

    .btn-primary:hover,
    .btn-success:hover,
    .btn-secondary:hover {
      opacity: 0.8;
    }
  </style>

</head>

<body>
  @include('admin.header')

  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <div class="table_center">
          <table>
            <tr>
              <th>Customer Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Status</th>
              <th>Change Status</th>
              <th>Print PDF</th>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->name}}</td>
              <td>{{$data->rec_address}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->product->title}}</td>
              <td>P{{$data->product->price}}</td>
              <td>
                <img src="products/{{$data->product->image}}">
              </td>
              <td>
                @if($data->status == 'in progress')
                <span class="status-red">{{$data->status}}</span>
                @elseif($data->status == 'On the way')
                <span class="status-skyblue">{{$data->status}}</span>
                @else
                <span class="status-green">{{$data->status}}</span>
                @endif
              </td>
              <td>
                <a class="btn btn-primary" href="{{url('on_the_way', $data->id)}}">On the Way</a>
                <a class="btn btn-success" href="{{url('delivered', $data->id)}}">Delivered</a>
              </td>

              <td>
                <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a>
              </td>

            </tr>
            @endforeach

          </table>
        </div>

      </div>
    </div>
  </div>

  <!-- JavaScript files-->
  <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
  <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('admincss/js/charts-home.js')}}"></script>
  <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>
