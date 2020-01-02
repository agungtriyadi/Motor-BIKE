<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
<title>Login</title>
</head>
<meta name="csrf-token" content="{{csrf_token()}}">
<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
           
      <div class="card card-signin my-5">
          <div class="card-body">
                <img src="{{asset('assets/image/avatar.png')}}" class="rounded mx-auto d-block"" width="200"/>    
            <h5 class="card-title text-center">Silahkan masuk</h5>
            <form class="form-signin">
             @csrf
              <div class="form-label-group">
                <label for="username">username</label>
                <input type="text" id="username" class="form-control" placeholder="username" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"> <a href="data.php" class="text-light">Masuk</a></button>
                 </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</body>
</html>