<?php
$ID=$_POST['NewsID'];

?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>最新資訊</title>	<meta charset="utf-8">
	<link rel="icon" href="images/NCU.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
          	<ul class="navbar-nav mr-auto">
            	<li class="nav-item active">
              	<a class="nav-link" href="index.php">大會資訊/Conference <span class="sr-only">(current)</span></a>
            	</li>
           	 	<li class="nav-item">
              	<a class="nav-link" href="Program.php">研討會議程 / Program</a>
            	</li>
            	<li class="nav-item">
              	<a class="nav-link" href="information.php">講者資訊</a>
            	</li>
            	<li class="nav-item">
             	 <a class="nav-link" href="Registration.php">報名 / Registration</a>
            	</li>
            	<li class="nav-item">
              	<a class="nav-link" href="Other.php">其他資訊 / Others</a>
            	</li>
          	</ul>
        	</div>	
		</div>
	</nav>
</header>



<?php include_once "sponsor.php" ?>
	<?php include_once "footer.php" ?>
	</body>
	</html>