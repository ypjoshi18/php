<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/assets/fonts/linearicons/style.css">
		<link rel="stylesheet" href="/assets/signup.css">
	</head>
	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="/assets/images/image-1.png" alt="" class="image-1">
				<form action="/controller/show-data.php"  method="post">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="number" id="mobno" name="mobno" pattern="[0-9]{10}" class="form-control" placeholder="Phone Number" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}" class="form-control" placeholder="Mail" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password"  id="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm Password" required>
					</div>
					<button type="submit" name="submit" value="submit">
						<span>Register</span>
					</button>
				</form>
				<img src="/assets/images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="/assets/js/jquery-3.3.1.min.js"></script> 
		<script src="/assets/js/main.js"></script>
	</body>
</html>