<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel CRUD</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="/">Products</a>
      </li>
    </ul>
  </div>

</nav>
    <div class="container justify-content-center">
        <div class="text-right">
            <a href="/products/create" class="btn btn-dark mt-2"> New Product</a>
        </div>

        <table class="table table-hover mt-2">
             <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $product->name }}</td>
                  <td>
                    <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50" alt="">
                  </td>
                  <td>
                    <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-small">Edit</a>
                    <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-small">Delete</a>
                  </td>
                  
                </tr>
             @endforeach
           </tbody>
       </table>


    </div>
</body>
</html>