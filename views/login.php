<?php
    //include __DIR__.'/../includes/session.php';
?>
<html>
<head>
  <title>Log In</title>
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
            <h5 class="card-title text-center">Sign In</h5>
              <?php include('error-messages.php');?>
            <form class="form-signin"  method="post" action="/controller/login.php">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <div class="custom-control custom-checkbox mb-3">
              </div>
              <button name="submit" value="submit" class="btn btn-lg btn btn-primary btn-block text-uppercase"
                type="submit" >Sign in</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-dark btn-block text-uppercase" onclick="window.location.href = '/views/signup.php'" type="submit">New?...click for new account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
    
</html>
  