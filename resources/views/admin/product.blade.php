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
            <h2>Add product</h2>
            <form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div>
                    <label>product title </label>
                    <input type="text" name="title" placeholder="write a title" required >
                </div>

                <div>
                    <label>product catagory </label>
                    <select required name="catagory">
                        <option value="add catagory " selected>add catagory</option>
                        @foreach($catagory as $catagory)
                        <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>  
                        @endforeach  
                      </select>
                  </div>
                
                <div>
                    <label>product price </label>
                    <input type="number" min="0" name="price" placeholder="write a price" required >
                </div>

                <div>
                    <label>product description </label>
                    <input type="text" name="description" placeholder="write a description" required >
                </div>

                <div>
                    <label>product Quantity </label>
                    <input type="number" name="quantity" min="0" required placeholder="write a quantity" >
                </div>

                <div>
                    <label>product discount price </label>
                    <input type="number" min="0" name="discount_price" placeholder="write a discount" >
                </div>
                <div>
                    <label>product Image </label>
                    <input type="file" name="image" required >
                </div>
                <input type="submit" value="add product " class="btn btn-primary">
            </form>
            {{-- <table class="table">
              <thead>
                <tr>
                  <th scope="col"> catagory</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
                <tbody>
                  @foreach ($data as $data)     
                  <tr>
                    <th class="row">{{$data->catagory_name}}</th>
                    <td>
                      <form class="d-inline" action="{{route('delete_catagry' , ['id' => $data['id'] ])}}" method="POST">
                      @method("delete")
                      @csrf
                      <button type="submit" class="btn btn-danger">Delelte</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table> --}}
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