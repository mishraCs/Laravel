<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
      @include('admin.css')
      <style>
        .container{
            margin: 80px auto;
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
             @include('admin.header')
        <!-- partial -->
        <div class="container">
            <h1 class="text-center">Products</h1>
            <div class="col-md-4 offset-4">
                <form action="{{ url('/add_product') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div>
                      <label for="">Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div>
                      <label for="">description</label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div>
                      <label for="">Image</label>
                      <input type="file" class="form-control" name="image">
                    </div>
                    <div>
                        <label for="">Select Category</label>
                        <select class="form-select w-100 " name="category" id="">
                        <option Selected>select</option>
                        @foreach ($category as $category)
                           <option value="1">{{ $category->name }}</option>
                        @endforeach                        
                        </select>
                    </div>
                    <div>
                      <label for="">Price</label>
                      <input type="number" class="form-control " min=0 name="price">
                    </div>
                    <div>
                      <label for="">Discount price</label>
                      <input type="text" class="form-control" name="discount_price">
                    </div>
                    <div>
                      <label for="">Quantity</label>
                      <input type="text" class="form-control" name="quantity">
                    </div>
                    <div class="mt-3">
                        <input type="submit" value='ADD PRODUCT' class='btn btn-success w-100'>
                    </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
          @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
