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
      
      @if($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <strong>{{$message}}</strong>

          </div>
      @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
               <div class="card mt-3 p-3">
               <form method="POST" action="/products/store" enctype="multipart/form-data">
                    @csrf 
                   
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" />

                        @if($errors->has('name'))
                           <span class="text-danger">Please Fill Up Name</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows=4 name="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                           <span class="text-danger">Please Write Description</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" id="">
                        @if($errors->has('image'))
                           <span class="text-danger">Please Upload Image</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Submit</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</body>
</html>