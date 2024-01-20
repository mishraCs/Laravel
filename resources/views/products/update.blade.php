<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'>
    <title>Document</title>
</head>
<body>
    <!-- =========== nav bar ================= -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>    
    </div>
  </div>
</nav>
    <!-- =========== nav bar ================= -->

    <div class='container col-md-6 mt-3'>
      @if($message = Session::get('success'))
      <div class="alert alert-success alert-block" >
        <strong>{{ $message }}</strong>
      </div>
      @endif
    <form method='post' action='/products/{{$product->id}}/update' enctype='multipart/form-data'>
      <div class='card p-4' >
      @csrf
      @method('put')
  <div class="mb-3">
    <label class='form-label'>Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name',$product->name)}}"> 
    @if($errors->has('name'))
    <span class='text-danger'>{{$errors->first('name')}}</span>
    @endif
</div>
  <div class="mb-3">
    <label class='form-label'>Description</label>
    <textarea class='form-control'name='description' rows='3'>{{old('description',$product->description)}}</textarea>
    @if($errors->has('description'))
    <span class='text-danger'>{{$errors->first('description')}}</span>
    @endif
</div>
<div class="mb-3">
    <label class='form-label'>Image</label>
    <input type="file" class="form-control" name="image" value="{{old('image')}}" > 
    @if($errors->has('image'))
    <span class='text-danger'>{{$errors->first('image')}}</span>
    @endif
</div>
  <button type="submit" class="btn btn-success mt-3">Update</button>
  </div>
</form>
     
    </div> 
</body>
</html>