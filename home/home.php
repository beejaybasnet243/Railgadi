<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Railgadi home page</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<!-- Bootstrap -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->

</head>

<body>
	

	<div id="booking" class="section">
	<a href="../homepage/home.php"><img src="../images/logo1.jpg" height="200px;"></a>
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="booking-cta">
							<h1>BOOK YOUR TICKET TODAY</h1>
							<h5>we provide best booking services </h5>
						</div>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form method="POST" action="../Search/search.php">

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label"> From</span>
											<input class="form-control" type="text" name="from" placeholder="City or Station">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label"> To</span>
											<input class="form-control" type="text" name="to" placeholder="City or Station">
										</div>
									</div>


									<div class="col-md-4">
										<div class="form-group">
											<span class="form-label">Departing</span>
											<input class="form-control" type="date" name="date" required>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Show Trains</button>
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>

</html>