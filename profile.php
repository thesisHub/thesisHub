<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thesis";

				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 	if(isset($_POST['submit'])){

 		$title=$_POST['name'];
 		$studentid=$_SESSION['userid'];
 		$pro=$_POST['faculty'];
 		$part=$_POST['participants'];
 		$des=$_POST['des'];
 		$pub=$_POST['published_by'];
 		$dep=$_POST['dept'];
 		$id=uniqid();
 		$imagepath="uploads/". $id.".pdf";

 		$target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["upload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["upload"]["tmp_name"], "uploads/". $id.".pdf");




 		$sql="INSERT INTO thesis (student_id,id,title,description,participants,published,faculty,department,pic)
    		VALUES ('$studentid', '$id', '$title', '$des' , '$part', '$pub', '$pro', '$dep','$imagepath')";
    	$conn->exec($sql);

 	//	$sql = "UPDATE user SET thesis_submitted = thesis_submitted+1 WHERE id = '$studentid' ";
	 //   $conn->exec($sql);
    	echo $studentid;

        echo "<a href=\"\" class=\"button solid yellow\">your thesis has been uploaded successfully</a>";
 	}
 }
 	if(isset($_POST['login'])){
 		$email=$_POST['email'];

 		$pass=$_POST['pass'];

        $sql = $conn->prepare("SELECT * FROM user");
					$sql->execute();
					$rowcount=1;
					while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
							if (! empty($_POST) && $_POST['email'] === $row['email'] && $_POST['pass'] === $row['password']){
							    echo"loggedin";
							    exit();

							}

						else {
							//$_SESSION['logged_in'] = false;
							echo "invalid credentials";
						}

				}

}


?>





















<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload</title>

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
						<span>Welcome to ResearchHub</span>
					</div> <!-- end .left -->
					<div class="right">
						<?php
							$userid=$_SESSION['userid'];
							$sql = $conn->prepare("SELECT * FROM user where id='$userid'");
							$sql->execute();

							while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
								echo

                      "<span class=\"item\"><a href=\"mailto:info@tastecousine.com\">".$row['name']."</a></span>";
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

			<div id="welcome-slider" class="welcome-slider flex-slider">
			<div class="slides clearfix">

				<div class="slide" style="background-image: url('images/background01.jpg');">
					<div class="inner">
						<div class="container">
							<div class="row aligned-cols">
								<div class="col-sm-6 aligned-middle">
									<h1 style="padding-left:150px;">Welcome Everyone!!</h1>

								</div> <!-- end .col-sm-6 -->

									</div> <!-- end .hours-box -->
								</div> <!-- end .col-sm-6 -->
							</div> <!-- end .row -->
						</div> <!-- end .container -->
					</div> <!-- end .inner -->
				</div> <!-- end .slide -->
			</div> <!-- end .slides -->
		</div> <!-- end .welcome-slider -->





		<div class="inner">
						<div class="container">
							<div class="row aligned-cols">
								<div class="col-sm-6">


<?php


	        echo
	          "<image style=\"height:100px; width:100px;  border-radius:50%; margin-top:50px;\" src=\"uploads/".$_SESSION['userid'].".jpg\"></image>";



?>
    </div> <!-- end .container -->
							  <div class="col-sm-6">



<?php
$userid=$_SESSION['userid'];
$sql = $conn->prepare("SELECT * FROM user where id='$userid'");
					$sql->execute();

					while ($row = $sql->fetch(PDO::FETCH_ASSOC)){

	        echo  "<h1>Information</h1>
	          <p>Name: ".strtoupper($row['name']) ."</p>
	          <p>Working on: ".$row['working_on']." </p>
	          <p>Thesises Uploaded: ".$row['thesis_submitted'] ."</p>


	   ";
}
?>

    </div> <!-- end .container -->


		</div> <!-- end .inner -->
	</div> <!-- end .slide -->
</div>
</div>



<div class="section white border-top">
  <div class="section white">
	<div class="inner">
		<div class="container">

			<form method="post" action="profile.php" enctype="multipart/form-data">
				Title:<br>
				<input type="text" name="name"/>

				Description:<br>
				<textarea name="des"></textarea>
				faculty:<br>

							<select name="faculty">
								<option value="fya">Fysol Abbas</option></a>
								<option value="jbc">Jebunnesa Chowdhury</option>
								<option value="mhr">Mohammad Habib Reza</option>
								<option value="api">Aparna Islam</option>
								<option value="mar">Mohammad Aminur Rahman</option></a>
								<option value="uwa">Ummul Wara Adrita</option>
								<option value="sma">S.M. Arifuzzaman</option>
								<option value="rha">Rahima Akhter</option>
								<option value="skp">Sukanta Paul</option></a>
								<option value="aza">Afzal Aftab</option>
								<option value="maz">Mohammad Akteruzzaman</option>
								<option value="amh">Ali Md. Haider</option>
								<option value="ssa">Supriyo Shafkat Ahmed</option></a>
								<option value="tra">Tarem Ahmed</option>
								<option value="mtr">Md. Tahmid Rashid</option>
								<option value="ssc">Md. Shadman Sakib Chowdhury</option>
								<option value="nhc">Noman Hossain Chowdhury</option>

							</select>


				Participants:<br>
				<input type="text" name="participants"/>
				Published By:<br>
				<input type="text" name="published_by"/>
				<br>
				<input type="radio" name="dept" value="mns">Department of Mathematics and Natural Sciences</input>
				<br>
				<input type="radio" name="dept" value="arc">Department of Architecture</input>
				<br>
				<input type="radio" name="dept" value="bbs">Brac Business School</input>
				<br>
				<input type="radio" name="dept" value="pha">Department of Pharmacy</input>
				<br>
				<input type="radio" name="dept" value="bil">BRAC Institute of Languages</input>
				<br>
				<input type="radio" name="dept" value="cse">Department of Computer Science and Enginnering</input>
				<br>
				<input type="radio" name="dept" value="eee">Department of Electrical and Enginnering</input>
				<br><br>
				<input type="file" name="upload"/>
				<br>
				<button type="submit" name="submit">submit</button>
			</form>

		</div> <!-- end .container -->
	</div> <!-- end .inner -->
</div> <!-- end .section -->


</div>




<div class="section white border-top">
<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h6>Copyright © All rights reserved</h6>

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
						<h6>last modified: 03/18/2016 23:27:56</h6>

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

	</body>
</html>
