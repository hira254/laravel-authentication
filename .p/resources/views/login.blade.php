<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A basic HTML boilerplate">
    <meta name="author" content="Your Name">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="my-5 text-center">Login Form:</h1>
<div class="col-md-6 mx-auto">
<form action="{{url("/login")}}" method="post">
@csrf
<div class="mb-3">
     <input  class="form-control"  type="email" name="email" placeholder="enter email">
      <span class="text-danger">
     @error("email")
     {{$message}}
     @enderror
     </span>
</div>
<div class="mb-3">
     <input  class="form-control" type="text" name="password" placeholder="enter password">
      <span class="text-danger">
     @error("password")
     {{$message}}
     @enderror
     </span>
</div>
<div>
<a class="btn btn-link" href="{{url("/register")}}">Don't have an account</a>
<br>
     <input class="btn btn-success" type="submit" value="login" >
</div>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
