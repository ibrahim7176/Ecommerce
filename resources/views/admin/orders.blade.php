<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>       
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet"href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}"/>
    <style>
        table{
            overflow-y: scroll;
        }
        table.table td img{
            width: 100%;
            height: auto;
            border-radius: 0;
            width:15vh;
            height: 25%;
        }
        table.table{
          color: white;
        }
    </style>
  </head>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
      <!-- partial -->
        
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
  <div class="main-panel">
    <div class="content-wrapper">
        <div class="text-center">
            <table class="table">
                <thead>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">price</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Delivery Status</th>
                    <th scope="col">Image</th>
                    <th scope="col">Delivered</th>

                </thead>
                <tbody>
                    @foreach($order as $order)
                    <tr>
                        <td scope="eow">{{$order->name}}</td>
                        <td >{{$order->email}}</td>
                        <td >{{$order->quantity}}</td>
                        <td >{{$order->address}}</td>
                        <td >{{$order->phone}}</td>
                        <td >{{$order->product_title}}</td>
                        <td >{{$order->price}}</td>
                        <td >{{$order->payment_status}}</td>
                        <td >{{$order->delivery_status}}</td>
                        <td >
                            <img src="/product/{{$order->image}}">
                        </td>
                        @if ($order->delivery_status == 'processing')
                            
                        <td><a href="{{route('delivered', $order->id)}}" class="btn btn-info">Delivered</a></td>
                        @else
                        <td><p style="color:green">Delivered</p></td>
                        
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('admin/assets/js/misc.js')}}"></script>
<script src="{{asset('admin/assets/js/settings.js')}}"></script>
<script src="{{asset('admin/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
</body>