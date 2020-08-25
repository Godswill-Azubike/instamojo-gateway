<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Payment Mojo</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="container">
	<div class="page-header">
        <h1><a href="#">Instamojo Payment</a></h1>
		<form action="src/pay.php" method="POST" accept-charset="utf-8">
			<div class="form-group">
			<label>Your Name</label>
			<input type="text" class="form-control" name="name" placeholder="Enter your name" required>	 
			</div>
			<div class="form-group">
			<label>Your Phone</label>
			<input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required> 
			</div>
			<div class="form-group">
			<label>Your Email</label>
			<input type="email" class="form-control" name="email" placeholder="Enter you email" required> 
			</div>
			<div class="form-group">
			<label>Amount</label>
			<input type="text" class="form-control" name="amount" Value="100" required>
			</div>
            <div class="form-group">
			<label>Payment Purpose</label>
			<input type="text" class="form-control" name="purpose" placeholder="Enter your payment purpose" required>	 
			</div>
			<p><input type="submit" class="btn btn-success btn-lg" value="Make Payment"></p>
		</form>
 
    
    </div> <!-- /container -->
		</div>


  </body>
</html>