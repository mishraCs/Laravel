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

  
      <div class="card" style="width: 18rem;">
  <img src="/product/{{ $product->image }}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Smartbbbbbbbbbb</p>
    <h6>Name : {{$product->name}}</h6>
    <h6>Description : {{$product->description}}</h6>

  </div>
</div>
  
</body>
</html>