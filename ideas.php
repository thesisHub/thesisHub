<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 	if(isset($_POST['submit_comment'])){


 		$des=$_POST['commentBody'];
 		$ideaid=$_POST['ideaid'];
 		$userid=$_SESSION['userid'];
 		$sql="INSERT INTO idea_response (ideaid, userid, description)
    		VALUES ('$ideaid', '$userid', '$des')";

    	$conn->exec($sql);

        echo "<a href=\"\" class=\"button solid yellow\">your comment has been published</a>";
 	}
 	else if(isset($_POST['submit_idea'])){
 		$userid=$_SESSION['userid'];
 		$title=$_POST['title'];
 		$idea=$_POST['idea'];
 		$id=uniqid();

 		$sql="INSERT INTO ideas (id, title, description, userid)
    		VALUES ('$id', '$title', '$idea', '$userid')";
    	$conn->exec($sql);
        echo "<a href=\"\" class=\"button solid yellow\">your comment has been published</a>";
 	}
 }
 ?>















<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Simple-Line-Icons-Webfont -->
		<link href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" rel="stylesheet">
		<!-- FlexSlider -->
		<link href="scripts/FlexSlider/flexslider.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Nivo Lightbox -->
		<link href="scripts/Nivo-Lightbox/nivo-lightbox.css" rel="stylesheet">
		<link href="scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

			<div class="responsive-menu">
			<a href="" class="responsive-menu-close"><i class="icon-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		<header class="header">
			<div class="top">
				<div class="container">
					<div class="left">
						<span>Research Hub</span>
					</div> <!-- end .left -->
					<div class="right">
					<?php
						if (isset($_SESSION['userid'])) {
							echo "
							<span class=\"item\"><a href=\"profile.php\">".$_SESSION['name']."</a></span>
							<span class=\"item\"><img src=\"".$_SESSION['imagePath']."\" alt=\"User Image\" style=\"width:30px;height:30px;border-radius:50%;\"></span>";
						}
						else{
							echo "<span class=\"item\"><a href=\"login.php\">Login</a></span>
						<span class=\"item\"><a href=\"register.php\">Sign up</a></span>";
						}
					?>
					</div> <!-- end .right -->
				</div> <!-- end .container -->
			</div> <!-- end .top -->
			<div class="navigation">
				<div class="container clearfix">
					<div class="logo"><a href="index.php"><img src="images/logo.png" alt="ResearchHub" class="img-responsive"></a></div> <!-- end .logo -->
					<nav class="main-nav">
						<ul class="list-unstyled">
							<li><a href="index.php">Home</a></li>

							<li>
								<a href="#">Department</a>
								<ul>
									<li><a href="thesis.php?dept=mns">Department of Mathematics and Natural Sciences</a>
										<ul>
											<li><a href="thesis.php?fname=fya">Fysol Abbas</a></li>
									       <li><a href="thesis.php?fname=jbc">Jebunnesa Chowdhury</a></li>
									      <li><a href="thesis.php?fname=api">Aparna Islam</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=arc">Department of Architecture</a>
										<ul>
											<li><a href="thesis.php?fname=mhr">Mohammad Habib Reza</a></li>
									       <li><a href="thesis.php?fname=mar">Mohammad Aminur Rahman</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=bbs">Brac Business School</a>
										<ul>
											<li><a href="thesis.php?fname=uwa">Ummul Wara Adrita</a></li>
									       <li><a href="thesis.php?fname=sma">S.M. Arifuzzaman</a></li>
									      <li><a href="thesis.php?fname=nhc">Noman Hossain Chowdhury</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=phar">Department of Pharmacy</a>
										<ul>
											<li><a href="thesis.php?fname=rha">Rahima Akhter</a></li>
									       <li><a href="thesis.php?fname=skp">Sukanta Paul</a></li>
									      <li><a href="thesis.php?fname=aza">Afzal Aftab</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=bil">BRAC Institute of Languages</a>
										<ul>
											<li><a href="thesis.php?fname=maz">Mohammad Akteruzzaman</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=cse">Department of Computer Science and Enginnering</a>
										<ul>
											<li><a href="thesis.php?fname=amh">Ali Md. Haider</a></li>
									       <li><a href="thesis.php?fname=jua">Jia Uddin</a></li>
									       <li><a href="thesis.php?fname=iff">Iffat Anjum</a></li>
									       <li><a href="thesis.php?fname=fhb">Farazul Haque Bhuiyan</a></li>

										</ul>
									</li>
									<li><a href="thesis.php?dept=eee">Department of Electrical and Enginnering</a>
										<ul>
											<li><a href="thesis.php?fname=ssa">Supriyo Shafkat Ahmed</a></li>
										       <li><a href="thesis.php?fname=tra">Tarem Ahmed</a></li>
										      <li><a href="thesis.php?fname=mtr">Md. Tahmid Rashid</a></li>
										      <li><a href="thesis.php?fname=ssc">Md. Shadman Sakib Chowdhury</a></li>
										</ul>
									</li>
								</ul>
							</li>

							<li><a href="ideas.php">Ideas</a></li>
							<li><a href="thesis.php">Thesis</a></li>
							<li><a href="#contact">Contact</a></li>
							<?php
						if (isset($_SESSION['userid'])) {
							echo"<li><a href=\"profile.php\">Upload</a></li>
							<li><a href=\"logout.php\">Logout</a></li>";
						}
					?>

						</ul>
					</nav> <!-- end .main-nav -->
					<a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
				</div> <!-- end .container -->
			</div> <!-- end .navigation -->
		</header> <!-- end .header -->



      <div class="section white border-top">
		<div class="section white">
			<div class="inner">
				<div class="container">
				<h2 class="text-center">Thesis Ideas</h2>

								<div class="reviews">
									<?php
										$sql = $conn->prepare("SELECT i.*
													    , u.name as username
													    , u.pic  as userpic
														FROM ideas i
       													INNER JOIN user u
													    on i.userid = u.id
     											    	");
										$sql->execute();
										$count = $sql->rowCount();
										echo"<h5>$count ideas</h5>";
										while ( $row = $sql->fetch(PDO::FETCH_ASSOC)) {
											$currentIdea=$row['id'];
											echo"<div class=\"review\">
										<img src=\"".$row['userpic']."\" alt=\"alt text here\" style=\"height:60px;width:60px\">
										<div class=\"content\">
											<span class=\"review-title\">".$row['title']."</span>
											<p>".$row['description']."</p>
											</div> <!-- end .content -->
											<div>
									</div> <!-- end .review -->";

									$sql2 = $conn->prepare("SELECT ir.*
													    , u.name as username

														FROM idea_response ir
       													INNER JOIN user u
													    on ir.userid = u.id




													    where ir.ideaid='$currentIdea'
     											    	");
										$sql2->execute();
										echo"<div class=\"review\" style=\"margin-left:50px;\">";

		while ($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
											echo"
										<div class=\"content\">
											<span class=\"review-title\">".$row2['username']."</span>
											<p>".$row2['description']."</p>
											</div> <!-- end .content -->
											<div>
									</div> <!-- end .review -->";


										}


									if(isset($_SESSION['userid'])){
									echo
									"<form action=\"ideas.php\" method=\"POST\"style=\"margin-left:50px;\">

										<textarea placeholder=\"Comment Body\" name=\"commentBody\"></textarea>
										<button type=\"submit\" class=\"button\" name=\"submit_comment\">Add Comment</button>
									<input type=\"hidden\" name=\"ideaid\" value=\"".$row['id']."\"/>
									</form>";


                                  }

								}
									?>


								</div> <!-- end .reviews -->
								<?php
                               if(isset($_SESSION['userid'])){
									echo
									"<form action=\"ideas.php\" method=\"POST\"style=\"margin-left:50px;\">
									<input type=\"text\" placeholder=\"title\" name=\"title\"/>
										<textarea placeholder=\"Idea\" name=\"idea\"></textarea>
										<button type=\"submit\" class=\"button\" name=\"submit_idea\">Add Idea</button>

									</form>";


                                  }



								?>

							</div> <!-- end .comments -->

						</div> <!-- end .col-sm-9 -->

					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
	</div>


	<div class="section white border-top">

<footer id="contact"class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<p>Copyright © All rights reserved</p>

					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<p>Ismot Jerin</p>
						<p>Binita Shaha</p>
						<p>Rabita Karim</p>
						<p>Fariha Jabin Islam</p>
						<p>Sadnam Sakib Ador</p>

					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<p><a href="mailto:ismtjerin@gmail">ismtjerin@gmail.com</p>
						<p><a href="mailto:niloyShaha@gmail">niloyShaha@gmail.com</p>
						<p><a href="mailto:tushi30@gmail">tushi30@gmail.com</p>
						<p><a href="mailto:fariha.jabin93@gmail">fariha.jabin93@gmail.com</p>
						<p><a href="mailto:iamador@gmail">iamador@gmail.com</p>
						</div>
					<div class="col-sm-3">
						<p  id="location" /><p>last modified: <span id="lmod"></span></p>

					</div> <!-- end .col-sm-3 -->
				</div> <!-- end .row -->
			</div> <!-- end .container -->
		</footer> <!-- end .footer -->
	</div>

		<!-- jQuery -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- FlexSlider -->
		<script src="scripts/FlexSlider/jquery.flexslider-min.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Nivo Lightbox -->
		<script src="scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>
        <script>document.getElementById("lmod").innerHTML = document.lastModified;
		</script>
	</body>
</html>
