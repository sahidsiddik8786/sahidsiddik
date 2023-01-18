<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Hyruz Group Lake Resort</title> 
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!--<link href="style.css" rel="stylesheet">-->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css\style.min.css" rel="stylesheet">
	
</head>
	
<body>
<div class="container-fluid p-0 nav-bar ">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-1 display-5 text-uppercase text-dark P-0">Lake Resort</h1>
			</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse justify-content-between display-5" id="navbarCollapse">
						<div class="navbar-nav ml-auto p-5">
							<a href="index.php" class="nav-item nav-link text-dark active">HOME</a>
							<a href="aboutus.php" class="nav-item nav-link text-dark">ABOUT US</a>
							<a href="contactus.php" class="nav-item nav-link text-dark">CONTACT US</a>
							<a href="gallery.php" class="nav-item nav-link text-dark">GALLERY</a>
							<a href="dineandlounge.php" class="nav-item nav-link text-dark">DINE AND LOUNGE</a>
							<a href="reservation.php" class="nav-item nav-link text-dark">MAKE  RESERVATION</a>
							
						</div>
					</div>	
		</nav>
	</div>	
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
				
                    <img src="images\6.jpg" height="700" width="100%" alt="Image">
				</div>	
			</div>	
		</div>	
	</div>	
	<div style = "margin-center;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h1><center>MAKE  RESERVATION</center></h1></strong><br><br>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price:".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>

<?php
include 'footer.php';
?>