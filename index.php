<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

		<div id="welcome-slider" class="welcome-slider flex-slider">
			<div class="slides clearfix">

				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row aligned-cols">
								<div class="col-sm-6 aligned-middle">
									<h1 class="carousel-text" style="text-align:center;">Welcome To BRAC University ResearchHub</h1>

								</div> <!-- end .col-sm-6 -->

									</div> <!-- end .hours-box -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
			</div> <!-- end .slides -->
		</div> <!-- end .welcome-slider -->

		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div>
							<h2 style="text-align:center;">What is ResearchHub?</h2>
							<p>ResearchHub is a place where you can view, collaborate and submit thesises. See the latest researches conducted by the students, get all the necessary informations for your thesis too!</p>
							<p>ResearchHub also supports faculty collaboration. You can actively see which field of research is conducted by your favourite faculty and you can ask questions about the work through the commenting section.</p>
						</div> <!-- end .col-sm-6 -->

					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white">
			<div class="partial-background"></div>
			<div class="inner">
				<div class="container">
					<h2 class="text-center white">Latest Uploaded Thesis</h2>
					<div class="specialties-slider">


							<?php
								$sql = $conn->prepare("SELECT id,title,published,participants,pic FROM thesis limit 10");
								$sql->execute();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"specialty\" style=\"border-style: solid; border-width: 15px; border-color:white;\">
									<div class=\"image\">
									<div class=\"overlay\" style=\"border-radius:5px;\"><a href=\"".$row['pic']."\" class=\"button white\" download>Download Thesis</a></div>
									<h4 style=\"color:white; text-align:center;\">".$row['title']."</h4>
									<h5 style=\"color:white;text-align:center;\">published in</h5>
									<p style=\"color:white;text-align:center;\">".$row['published']."</p>
									<h5 style=\"color:white;text-align:center;\">parcitipents</h5>
									<p style=\"color:white;text-align:center;\">".$row['participants']."</p>
									</div> <!-- end .image -->
							<a href=\"thesismain.php/?id=".$row['id']."\" style=\"color:white;\">See More ></a>
						</div> <!-- end .specialty -->";
								}
							?>




					</div> <!-- end .specialty-slider -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section white border-top">
			<div class="inner">
				<div class="container" style="text-align:center;">
				<h2 class="text-center">Site Stats</h2>
						<div class="col-sm-3 aligned-middle" >
							<?php
							   $noOfUser   = $conn->query("select count(*) from  user")->fetchColumn();
							   $noOfthesis = $conn->query("select count(*) from  thesis")->fetchColumn();
							   $noOfdept   = $conn->query("select count(*) from  department")->fetchColumn();
							   $noOffaculty= $conn->query("select count(*) from  faculty")->fetchColumn();

							?>
								<h1 ><?php echo $noOfUser ?></h1>
									<h5>Users signed up</h5>
								</div>
								<div class="col-sm-3 aligned-middle">
									<h1><?php echo $noOfthesis ?></h1>
									<h5>Thesis Uploaded</h5>
								</div>
								<div class="col-sm-3 aligned-middle">
									<h1><?php echo $noOfdept ?></h1>
									<h5>Departments Enlisted</h5>
								</div>
								<div class="col-sm-3 aligned-middle">
									<h1><?php echo $noOffaculty ?></h1>
									<h5>Faculties Enlisted</h5>
								</div> -->


								</div><!-- end .col-sm-3 -->

					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->
      <div class="section white">
			<div class="partial-background" style="background-image: url('images/background04.jpg');"></div>
			<div class="inner">
				<div class="container">
					<h2 class="text-center white">Faculties</h2>
					<div class="specialties-slider">
						<div class="specialty">
							<div class="image">
								<img src="images/faraz.jpg" alt="alt text here" class="img-responsive">
							</div> <!-- end .image -->

							<h5>Farazul Haque Bhuiyan</h5>
							<p>Department Of Computer Science and Engineering, BRAC University</p>
						</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/adnan.jpg" alt="alt text here" class="img-responsive">
							</div> <!-- end .image -->
							<h5>M. Abdur Rahman Adnan</h5>
							<p>Department Of Computer Science and Engineering, BRAC University</p>
							</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/shup.jpg" alt="alt text here" class="img-responsive">
							</div> <!-- end .image -->
							<h5>Supriyo Shafkat Ahmed</h5>
							<p>Department Of Electrical and Electronic Engineering, BRAC University</p>
							</div> <!-- end .specialty -->
						<div class="specialty">
							<div class="image">
								<img src="images/iffat.jpg" alt="alt text here" class="img-responsive">
							</div> <!-- end .image -->
							<h5>Iffat Anjum</h5>
							<p>Department Of Computer Science and Engineering, BRAC University</p></div> <!-- end .specialty -->
					 <!-- end .specialty-slider -->
					<div class="specialty">
							<div class="image">
								<img src="images/tarem.jpg" alt="alt text here" class="img-responsive">
							</div> <!-- end .image -->
							<h5>Tarem Ahmed</h5>
							<p>Department of Electrical and Electronic Engineering, BRAC University</p>
							</div>
							</div> <!-- end .specialty -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->


		<div class="section white border-top">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h3><span class="highlight">01.</span> Computer Science and Engineering</h3>
							<p>The undergraduate and graduate programs offered by this school prepare students to be well-qualified for academia and the industry, and to apply engineering principles across a wide range of disciplines. The CSE Department offers:

								Bachelor of Science in Computer Science (BSCS) and
								Bachelor of Science in Computer Science and Engineering (BSCSE)

								The department has also expanded its curriculum to graduate levels by offering three graduate programs:

								Master of Science (M.Sc.) in Computer Science and Engineering
								Master of Engineering (M.Engg.) in Computer Science and Engineering, and
								Master of Computer Applications
							</p>
							</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<h3><span class="highlight">02.</span>  Electrical and Electronics Engineering </h3>
							<p>The Electrical and Electronic Engineering (EEE) department  offers two undergraduate degree programs:
							Bachelor of Science in Electrical and Electronic Engineering and
							Bachelor of Science in Electronic and Communication Engineering
							It also offers two graduate degree programs:
							Master of Science in Electrical and Electronic  Engineering and
							Master of Engineering in Electrical and Electronic Engineering
							Besides the academic programs, the department actively encourages both undergraduate and graduate students to engage themselves in research.
							</p>
							</div> <!-- end .col-sm-6 -->
					</div> <!-- end .row -->
					<div class="spacer"></div>
					<div class="row">
						<div class="col-sm-6">
							<h3><span class="highlight">03.</span> Mathematics and Natural Science</h3>
							<p>MNS Department has been providing quality education in basic and applied sciences to the
							 students of different disciplines of BRACU including its own. Apart from offering courses in
							  physical and life sciences like physics, chemistry, biology, biotechnology, microbiology and
							  so courses in mathematics, statistics, economic geography, environmental sciences,
							   MNS Department also has its own undergraduate degree programs in physics,
							   applied physics and electronics, microbiology, biotechnology and mathematics.
							   It also offers a Master’s program namely, MS in Biotechnology.</p></div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<h3><span class="highlight">04.</span>ECONOMICS AND SOCIAL SCIENCES</h3>
							<p>
								Since its establishment, the department has given special attention to critical pedagogical methods in and outside classroom. An increasing number of students from other departments are opting to double major in Economics or to minor in Economics and Sociology.
								The department offers an undergraduate degree in Economics, minors in Economics and Sociology, and a postgraduate degree in Applied Economics. From 2013, the department is also offering an undergraduate degree and a minor in Anthropology.
							</p>
							</div> <!-- end .col-sm-6 -->
						  </div> <!-- end .row -->
						  <div class="spacer"></div>
						  <div class="row">
						<div class="col-sm-6">
							<h3><span class="highlight">05.</span> English and Humanities</h3>
							<p>The Department fosters the imaginative, observational, analytical and communicative skills of its students through its three major streams: Literature, Linguistics & ELT and Media. The Department also offers a Minor programme in History, which helps the students to contextualize their learning.
							The postgraduate programme for the degree of M.A. in English has two streams: Literature and Linguistics & ELT.
							</p>
							</div> <!-- end .col-sm-6 -->
						<div class="col-sm-6">
							<h3><span class="highlight">06.</span> Computer Science and Engineering</h3>
							<p>
								The department offers following programs:

								Bachelor of Architecture
								Certificate in Construction Management
								Master in Disaster Management

								The department undertakes research programs in different areas. It has done so in association with the Research and Education division of BRAC, the British Council, the University of Manchester, Loughborough University, Hoge School Van Amsterdam etc.
							</p>
							</div> <!-- end .col-sm-6 -->

							</div>

							 <div class="row">
							 <div class="spacer"></div><div class="spacer"></div>
							<div class="col-sm-6">
							<h3><span class="highlight">07.</span> Pharmacy </h3>
								<p>Bachelor of Pharmacy (Honours) curriculum in BRAC University is to introduce beginning pharmacy students to the technologic and scientific principles underlying the preparation of dosage forms and drug delivery systems and to their use in patient care. Through an integrated course curriculum students will gain an understanding of the interrelationships between physical pharmacy principles, biopharmaceutics and pharmacokinetics, dosage form design, product formulation, small- and large-scale product manufacture, and the clinical application of pharmaceuticals in patient care.</p>
							</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
							</div>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<form method="post" action="thesis.php">
		<div class="section small text-center dark transparent parallax" style="background-image: url('images/background02.jpg');">
								<h5>Search For Thesises</h5>
									<ul class="list list-unstyled">
										<li><input style="width:50%; margin:auto;" type="text" placeholder="search by thesis name" name="thesisName"></li>
										<li><button type="submit" class="button" name="searchByThesisName">Button</button></li>

									</ul>
		</div>
		</form>

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
