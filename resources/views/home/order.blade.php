<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Table Styling */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #FFCCCB; 
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #FFCCCB; 
            color: #5D3A3A; 
        }

        th {
            background-color: #FFE5B4; 
            font-weight: bold;
            color: #8B0000; 
        }

        tr:hover {
            background-color: #FFF5EE; 
        }

        /* Hero Area Styling */
        .hero_area {
            background-color: #FFEBE8; 
            padding: 40px;
        }

        .div_center {
            margin: 60px;
            display: flex;
            justify-content: center;
        }

    </style>

    @include('home.css')
</head>

<body>

    <div class="hero_area">
        @include('home.header')

        <div class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>

                @foreach($order as $order)
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img height="150" width="200" src="products/{{$order->product->image}}">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('home.footer')

</body>

</html>
