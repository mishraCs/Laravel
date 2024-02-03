>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <style>
        #container{
            margin: 50px auto;
        }
        #container  .box{
           /* marginl: 100px; */
        }
    </style>
    <!-- plugins:css -->
      @include('admin.css')
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
          <div id="container">
            <div class="box">
                <h1 class="text-center">Category</h1>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif


                <form action="{{ url( '/add_category')}}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="write a category name">
                    <button type="sumit" class="btn btn-primary">Add category</button>
                </form>
            </div>

            {{-- table  --}}



            <table class="table text-white table-bordered">
                <thead>
                  <tr >
                    <th style="color:white !important;">Name</th>
                    <th colspan="2" style="color:white !important;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as  $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>
                            <a class="btn btn-danger"
                            onclick="return confirm('Are you sure to delete?')"
                            href="{{ url('/delete_category',$data->id) }}">Delete</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Update</button>
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
