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
       @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
         <h1 class="text-center">List of Products</h1>
         <table class="table">
  <thead>
    <tr>
      <th class="text-white" scope="col">Name</th>
      <th class="text-white" scope="col">Description</th>
      <th class="text-white" scope="col">Quantity</th>
      <th class="text-white" scope="col">Category</th>
      <th class="text-white" scope="col">Price</th>
      <th class="text-white" scope="col">Discount Price</th>
      <th class="text-white" scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($product as $products)
    <tr  class="text-white"  >
      <td>{{$products->name}}</td>
      <td>{{$products->description}}</td>
      <td>{{$products->quantity}}</td>
      <td>{{$products->category}}</td>
      <td>{{$products->price}}</td>
      <td>{{$products->discount_price}}</td>
      <td><img src="/product/{{$products->image}}" alt="">
      </td>
      <td><a onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger" href="{{url('/delete_product',$products->id)}}">Delete</a>
      <a  class="btn btn-success" href="{{url('/update_product',$products->id)}}">Update</a>
    </td>

    </tr>
    @endforeach
  </tbody>
</table>

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
