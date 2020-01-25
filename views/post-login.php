<?php
include 'validate.php';
?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    
    <body>
        <div class="jumbotron text-center">
        <h1 class="display-3">Thank You!</h1>
        <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
        <hr>
        <p>Having trouble? <a href="">Contact us</a></p>
        <p class="lead"><a class="btn  btn-primary btn-sm" href="/Views/login.php" role="button">Continue to homepage</a></p>
        <p>Want to Update Your Data? <a href="/views/update-page.php">Click Here!</a></p>
        <p>Want to Delete Your Account? <a onclick="confirmation()" href="">Click Here!</a></p>
        <p>Want to Log Out? <a href="/controller/logout.php">Click Here!</a></p>
        </div>
    </body>
    <script>
        function confirmation()
        {
            var result = confirm("Want to delete?");
            if (result) window.location.href ="/controller/deleteData.php";  
        }
    </script>
</html>