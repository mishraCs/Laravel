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
    <a class="navbar-brand" href="/">Navbar</a>
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

    <div class='container mt-2px'>
      <div class='text-right'>
        <a class='btn btn-dark' href="product/create">Create Product</a>
      </div>
      <h1>products</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th>{{ $loop->index+1 }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->description }}</td>
      <td>
        <img src="product/{{ $product->image }}" alt="" class="rounded-circle"
         style="object-fit contain;heigth: 700px; width: 50px;">
      </td>
      <td>
        <a class="btn btn-success me-3 " href="products/{{ $product->id }}/edit">Edit</a>   
        <a class="btn btn-danger" href="products/{{ $product->id }}/delete" >Delete</a>
        <a class="btn btn-secondary" href="products/{{ $product->id }}/show" >Veiw</a>
      </td>       
    </tr>
    @endforeach
  </tbody>
  </table>

{{$products->links()}}

</div> 
</body>
</html>