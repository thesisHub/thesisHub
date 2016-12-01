<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";
$thesisid =	$_GET['thesis'];
$row = [];

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$noOfthesis = $conn->query("select count(*) from  thesis")->fetchColumn();
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				 	if(isset($_POST['submit_comment'])){
				 		echo"comment submitted";
				 		$id = uniqid();
				 		$title=$_POST['commentTitle'];
				 		$body = $_POST['commentBody'];
				 		$userid = $_SESSION['userid'];
				 		$sql="INSERT INTO comments (id, comment_title, comment_body, userid, thesisId)
				    		VALUES ('$id', '$title', '$body', '$userid', '$thesisid')";

				    	$conn->exec($sql);

       				 echo "<a>your comment has been published</a>";
 	}
 }

?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ResearchHub</title>

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
						<span>Welcome to Research Hub</span>
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
					<div class="logo"><a href="index.html"><img src="images/logo.png" alt="Cuisine" class="img-responsive"></a></div> <!-- end .logo -->
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

		<div class="section white">

			<div class="inner">
				<div class="container">
					<div class="recipe-single">
						<?php
						if (isset($_GET['thesis'])) {
							$thesis = $_GET['thesis'];
							$sql = $conn->prepare("SELECT t.*
													    , u.name as username
													    , u.pic  as userpic
													    , d.name as deptname
													    , f.name as facultyname
													FROM thesis t
       												INNER JOIN user u
													    on t.student_id = u.id
													INNER JOIN department d
													    on t.department = d.keyword
												    INNER JOIN faculty f
													    on t.faculty = f.keyword
     											    WHERE t.id = '" . $thesis ."'");

								$sql->execute();
								$row = $sql->fetch(PDO::FETCH_ASSOC);
						}
						?>
						<h2><?php echo $row['title']?></h2>
						<div class="row">
							<div class="col-sm-9">
								<p><?php echo $row['description'] ?>.</p>
								<h5>Published In: <b><?php echo $row['published'];?></b></h5>
								<a href="<?php echo $row['pic'];?>" class="button" download>Download Thesis</a>





								<div class="reviews">
									<?php
										$sql = $conn->prepare("SELECT c.*
													    , u.name as username
													    , u.pic  as userpic
														FROM comments c
       													INNER JOIN user u
													    on c.userid = u.id
     											    	WHERE c.thesisid = '" . $thesis ."'");
										$sql->execute();
										$count = $sql->rowCount();
										echo"<h5>$count Comments</h5>";
										while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
											echo"<div class=\"review\">
										<img src=\"".$row['userpic']."\" alt=\"alt text here\" style=\"height:60px;width:60px\">
										<div class=\"content\">
											<span class=\"review-title\">".$row['comment_title']."</span>
											<p>".$row['comment_body']."</p>
											</div> <!-- end .content -->
									</div> <!-- end .review -->";
										}
									?>
									<?php
									if(isset($_SESSION['userid'])){
									echo"
									<form action=\"thesismain.php?thesis=$thesis\" method=\"POST\">
										<input type=\"text\" placeholder=\"Comment Title\" name=\"commentTitle\"></input>
										<textarea placeholder=\"Comment Body\" name=\"commentBody\"></textarea>
										<button type=\"submit\" class=\"button\" name=\"submit_comment\">Add Comment</button>
									</form>";
								}
									?>


								</div> <!-- end .reviews -->
							</div> <!-- end .col-sm-9 -->
							<div class="col-sm-3">
<?php
						if (isset($_GET['thesis'])) {
							$thesis = $_GET['thesis'];
							$sql = $conn->prepare("SELECT t.*
													    , u.name as username
													    , u.pic  as userpic
													    , d.name as deptname
													    , f.name as facultyname
													FROM thesis t
       												INNER JOIN user u
													    on t.student_id = u.id
													INNER JOIN department d
													    on t.department = d.keyword
												    INNER JOIN faculty f
													    on t.faculty = f.keyword
     											    WHERE t.id = '" . $thesis ."'");

								$sql->execute();
								$row = $sql->fetch(PDO::FETCH_ASSOC);
						}
						echo
									"<div><b>Uploaded by<b></div><br>
									<div class=\"recipe-author\"><img src=\"".$row['userpic']."\" alt=\"\" style=\"height:30px; width:30px;\"><".$row['username']."></div>
								 <br></br>
								<div class=\"recipe-sidebar-item\">
									<div class=\"recipe-details row\">
										<div><h5><b>Thesis Details<b></b><h5></div>
										<div>Participants</div>
										<div>".$row['participants']."</div><br>
										<div>Faculty</div>
										<div>".$row['facultyname']."</div><br>
										<div>Department</div>
										<div>".$row['deptname']."</div><br>";
										?>
									</div>
									</div>
									<form method="post" action="thesis.php">
								<div class="recipe-sidebar-item">

									<h5>Search For Thesises</h5>
									<ul class="list list-unstyled">
										<li><input  type="text" placeholder="search by thesis name" name="thesisName"></li>
										<li><button type="submit" class="button solid yellow" name="searchByThesisName">Button</button></li>
									</ul>
								</div> <!-- end .recipe-sidebar-item -->
								</form>

							</div> <!-- end .col-sm-3 -->
						</div> <!-- end .row -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white border-top">

		<footer id="contact"class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<p>Copyright © All rights reserved</p>

					</div> <!-- end .col-sm-3 -->
					<div class="col-sm-3">
						<p>Ismot Jerin</p>

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
