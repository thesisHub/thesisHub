<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$noOfthesis = $conn->query("select count(*) from  thesis")->fetchColumn();
				$count = 0;
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

		<form method="post" action="thesis.php">
		<div class="section small text-center dark transparent parallax" style="background-image: url('images/background02.jpg');">
			<h5>Search For Thesises</h5>
				<ul class="list list-unstyled">
					<li><input style="width:50%; margin:auto;" type="text" placeholder="search by thesis name" name="thesisName"></li>
					<li><button type="submit" class="button" name="searchByThesisName">Button</button></li>

				</ul>
		</div>
		</form>
		<div class="section white">
			<div class="inner">
				<div class="container">
					<div class="recipe-top clearfix">
					<?php
					if (isset($_POST['searchByThesisName'])) {
						echo"<span class=\"recipe-count\">Searched For ".$_POST['thesisName']."</span>";
					}
					else
						echo "<span class=\"recipe-count\">total ".$noOfthesis." Thesies</span>";

						?>
						<span class="recipe-sort">
							Sort By:
							<form action="thesis.php" method="POST">
							<select name="sortBy">
								<option value="pub">Publications</option></a>
								<option value="dept">Department</option>
								<option value="fac">Faculty Name</option>
								<option value="topic">Topic</option>
							</select>
							<button class="button small" name="sort">go</button>
							<form>
						</span>
					</div> <!-- end .recipe-top -->
					<div class="row">

							<?php
							$num_rec_per_page=8;
							if(isset($_POST['sort'])){
									if ($_POST['sortBy'] === 'pub') {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													ORDER BY t.published
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													ORDER BY t.published
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
						if ($_POST['sortBy'] === 'fac') {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													ORDER BY f.name
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													ORDER BY f.name
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
						if ($_POST['sortBy'] === 'dept') {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													ORDER BY d.name
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													ORDER BY d.name
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
						if ($_POST['sortBy'] === 'topic') {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													ORDER BY t.title
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													ORDER BY t.title
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
									}

							if(isset($_POST['searchByThesisName'])){
								if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													WHERE t.title LIKE '%".$_POST['thesisName']."%' OR  t.published LIKE '%".$_POST['thesisName']."%' OR  t.participants LIKE '%".$_POST['thesisName']."%' OR  t.department LIKE '%".$_POST['thesisName']."%'
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													WHERE t.title LIKE '%".$_POST['thesisName']."%' OR  t.published LIKE '%".$_POST['thesisName']."%' OR  t.participants LIKE '%".$_POST['thesisName']."%' OR  t.department LIKE '%".$_POST['thesisName']."%'

													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}

                 else if (isset($_GET["dept"])) {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
							$dept=$_GET["dept"];
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
													where t.department= '$dept'
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													where t.department= '$dept'
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
						   else if (isset($_GET["fname"])) {
										if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
							$fname=$_GET["fname"];
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
													where t.faculty= '$fname'
													LIMIT $start_from, $num_rec_per_page

													");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													where t.faculty= '$fname'
													");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
							}
						}
							else{
							if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
							$start_from = ($page-1) * $num_rec_per_page;
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
													LIMIT $start_from, $num_rec_per_page");
								$sql->execute();
								$counter = $conn->prepare("SELECT t.*
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
													    on t.faculty = f.keyword");
								$counter->execute();
								$count = $counter->rowCount();
								while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
									echo
									"<div class=\"col-sm-3\">
							         <div class=\"recipe\">
								     <div class=\"image\">

										<h5>".$row['title']."</h5>
										<div class=\"recipe-details row\">
											<div class=\"col-xs-4\">Professor</div>
											<div class=\"col-xs-8\"><b>".$row['facultyname']."</b></div>
											<div class=\"col-xs-4\">Participants</div>
											<div class=\"col-xs-8\"><b>".$row['participants']."</b></div>
											<div class=\"col-xs-4\">Department</div>
											<div class=\"col-xs-8\"><b>".$row['deptname']."</b></div>
											<div class=\"col-xs-4\">Published In</div>
											<div class=\"col-xs-8\"><b>".$row['published']."</b></div>
											<div class=\"col-xs-4\">Uploaded By</div>
											<div class=\"col-xs-4\"><b>".$row['username']."</b></div>
											</div> <!-- end .image -->
								</div> <!-- end .recipe-details -->
								<div class=\"recipe-author\"><a href=\"thesismain.php?thesis=".$row['id']."\">See More ></a></div>
							</div> <!-- end .specialty -->
						</div> <!-- end .col-sm-3 -->";
					}
						}





							//}
							?>



					</div> <!-- end .row -->
					<?php

					$total_pages = ceil($count/ $num_rec_per_page);

					echo "<nav>
						<ul class=\"pager\">
						<li class=\"previous\"><a href='thesis.php?page=1'>".'|<'."</a></li> "; // Goto 1st page
					echo "<li class=\"next\"><a href='thesis.php?page=$total_pages'>".'>|'."</a> </li>"; // Goto last page
					for ($i=1; $i<=$total_pages; $i++) {
					            echo "<li class=\"page-number\"><a href='thesis.php?page=".$i."'>".$i."</a> </li>";
					};
					echo "</ul>
					</nav>";
					?>
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
<script>

		document.getElementById("lmod").innerHTML = document.lastModified;
		</script>
	</body>
</html>
