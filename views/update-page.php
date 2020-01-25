<html>
<head>
  <a href="views/SignUp.html"></a>
  <title>Update</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/login.css" />
  <style type="text/css">
    :root {
      --input-padding-x: 1.5rem;
      --input-padding-y: .75rem;
    }
  </style>
</head>
    
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Enter Data Here!</h5>
            <form class="form-signin"  method="post" action="/controller/update-data.php">
              <div class="form-label-group">
                <input type="text" id="name" name="name" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Name</label>
              </div>
              <div class="form-label-group">
                <input type="number" id="mobno" name="mobno" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Mobile Number</label>
              </div>
                <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
                <div class="form-label-group">
                <input type="password" id="password" name="cpassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Confirm Passowrd</label>
              </div>
                <hr class="my-4">
              <button name="submit" value="submit" class="btn btn-lg btn btn-primary btn-block text-uppercase"
                type="submit" >Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
    
</html>