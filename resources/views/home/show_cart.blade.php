<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
    <!-- font awesome style -->
    <link href="{{asset('home/css/font-awesome.min.css')}}"rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('home/css/style.css' )}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset('home/css/responsive.css ')}}" rel="stylesheet" />
    <style>
        table.table td img{
            width: 100%;
            height: auto;
            border-radius: 0;
            width:40vh;
            height: 25%;
        }
       
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <br>
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close"data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
        <br>
        <div class="text-center">
            <table class="table">
             <thead>
                 <th scope="col">Product title</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Price</th>
                 <th scope="col">Product Image</th>
                 <th scope="col">Action</th>
             </thead>
             <tbody>
                 <?php $totalprice = 0 ?>
                 @foreach($cart as $cart)
                 <tr>
                     <td scope="row">{{$cart->product_title}}</td>
                     <td>{{$cart->quantity}}</td>
                     <td>${{$cart->price}}</td>
                     <td>
                        <img src="/product/{{$cart->image}}" >
                     </td>
                     <td>
                       <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product')" href="{{route('remove_cart',$cart->id)}}">remove Product</a>
                     </td>
                 </tr>
                 <?php $totalprice = $totalprice + $cart->price ?>
                 @endforeach
                 <tr class="table-primary">
                    <td scope = "row"  >Total Orders:  {{$cart->count()}} </td>
                    <td>Total Price</td>
                    <td>${{ $totalprice}}</td>
                    <td>Prodceed to Order</td>
                    <td>
                        <a href="{{route('cash_order')}}" class="btn btn-info">Cash On Delivery</a>
                        <a href="{{route('stripe',$totalprice)}}" class="btn btn-success">Pay Using Card</a>
                    </td>
                 </tr>
             </tbody>
            </table>
        </div>
    </div>
    <!-- why section -->
    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="{{asset('home/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('home/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('home/js/custom.js')}}"></script>
</body>

</html>