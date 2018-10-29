
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Queen's Journal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body style=" text-shadow: 3px 3px 0px #000;">
	
		<section id="fh5co-home" data-section="home" style="background-image: url(images/banner.png);" data-stellar-background-ratio="0.5">
			<div class="gradient"></div>
			<div class="container">
				<div class="text-wrap">
					<div class="text-inner">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">

								<?php
								if(isset($_POST['submit'])){
									$Total = 0;
									$var = $_POST["var"];
									$var2 = $_POST["var2"];
									$var3 = $_POST["var3"];
									$var4= $_POST["var4"];
									$var5 = $_POST["var5"];
									$var6 = $_POST["var6"];
									$var7 = $_POST["var7"];
									$var8 = $_POST["var8"];
									$var9 = $_POST["var9"];
									$var10 = $_POST["var10"];
									$var11 = $_POST["var11"];
									$var12 = $_POST["var12"];
									$var13 = $_POST["var13"];


									if(isset($var) && $var=="anchorman"){
										$Total = $Total + 1;
									}elseif(!isset($var)){
										$Total = $Total + 0;
									}
									if(isset($var2) && $var2=="castaway"){
										$Total = $Total + 1;
									}elseif(!isset($var2)){
										$Total = $Total + 0;
									}
									if(isset($var3) && $var3=="ET"){
										$Total = $Total + 1;
									}elseif(!isset($var3)){
										$Total = $Total + 0;
									}
									if(isset($var4) && $var4=="findingNemo"){
										$Total = $Total + 1;
									}elseif(!isset($var4)){
										$Total = $Total + 0;
									}
									if(isset($var5) && $var5=="homealone"){
										$Total = $Total + 1;
									}elseif(!isset($var5)){
										$Total = $Total + 0;
									}
									if(isset($var6) && $var6=="song"){
										$Total = $Total + 1;
									}elseif(!isset($var6)){
										$Total = $Total + 0;
									}
									if(isset($var7) && $var7=="hsm"){
										$Total = $Total + 1;
									}elseif(!isset($var7)){
										$Total = $Total + 0;
									}
									if(isset($var8) && $var8=="matilda"){
										$Total = $Total + 1;
									}elseif(!isset($var8)){
										$Total = $Total + 0;
									}
									if(isset($var9) && $var9=="thesandlot"){
										$Total = $Total + 1;
									}elseif(!isset($var9)){
										$Total = $Total + 0;
									}
									if(isset($var10) && $var10=="monstersinc"){
										$Total = $Total + 1;
									}elseif(!isset($var10)){
										$Total = $Total + 0;
									}
									if(isset($var11) && $var11=="pulpfiction"){
										$Total = $Total + 1;
									}elseif(!isset($var11)){
										$Total = $Total + 0;
									}
									if(isset($var12) && $var12=="sayanything"){
										$Total = $Total + 1;
									}elseif(!isset($var12)){
										$Total = $Total + 0;
									}
									if(isset($var13) && $var13=="shrek"){
										$Total = $Total + 1;
									}elseif(!isset($var13)){
										$Total = $Total + 0;
									}

									echo "<h1>Final Score: $Total </h1>";
									echo "<a class='btn btn-default btn-lg' style='text-decoration: none;' href='#fh5co-testimonys' >Answers</a>";
									echo "<a class='btn btn-default btn-lg' style='text-decoration: none;' href='index.html'>Home Screen</a>";
								}
								else{
									echo "<h1>Final Score: 0</h1>";
									echo "<a class='btn btn-default btn-lg' style='text-decoration: none;' href='#fh5co-testimonys' >Answers</a>";
									echo "<a class='btn btn-default btn-lg' style='text-decoration: none;' href='index.html'>Home Screen</a>";
								}
								?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="fh5co-testimony" data-section="testimony" style="background: url(https://s-media-cache-ak0.pinimg.com/originals/a9/78/30/a978308b80ce087216b2088797c7cc94.jpg)no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;">
		<div class="container">
			<div class="row">


				<div class="col-md-12">

					<div class="col-md-4">
						<div class="row">
							<div class="testimony-entry animate-box">
								<div class="feed-bubble">
									<p>This was a bad choice</p>
								</div>
								<div class="author-img img-responsive" style="background-image: url(images/Anchorman.png);">
								</div>
								<span class="user">Anchorman</span>
							</div>
						</div>
						</div>


						<div class="col-md-4">
							<div class="row">
								<div class="testimony-entry animate-box">
									<div class="feed-bubble">
										<p>WIIILLLSSOOOONN!</p>
									</div>
									<div class="author-img img-responsive" style="background-image: url(images/Castaway.png);">
									</div>
									<span class="user">Castaway</span>
								</div>
							</div>
							</div>

							<div class="col-md-4">
								<div class="row">
									<div class="testimony-entry animate-box">
										<div class="feed-bubble">
											<p>Phone Home</p>
										</div>
										<div class="author-img img-responsive" style="background-image: url(images/ET.png);">
										</div>
										<span class="user">ET</span>
									</div>
								</div>
							</div>

							</div>
							<div class="col-md-12">
								<div class="col-md-4">
									<div class="row">
										<div class="testimony-entry animate-box">
											<div class="feed-bubble">
												<p>Fish are friends not food</p>
											</div>
											<div class="author-img img-responsive" style="background-image: url(images/findingNemo.png);">
											</div>
											<span class="user">Finding Nemo</span>
										</div>
									</div>
								</div>


								<div class="col-md-4">
									<div class="row">
										<div class="testimony-entry animate-box">
											<div class="feed-bubble">
												<p>Usually meant for ironing clothes, this item could also swing from a string and scar your face</p>
											</div>
											<div class="author-img img-responsive" style="background-image: url(images/HomeAlone.png);">
											</div>
											<span class="user">Home Alone</span>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="row">
										<div class="testimony-entry animate-box">
											<div class="feed-bubble">
												<p>Party till the break of dawn</p>
											</div>
											<div class="author-img img-responsive" style="background-image: url(images/Song.png);">
											</div>
											<span class="user">Project X</span>
										</div>
									</div>
								</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>Stick to the status quo by keeping your head in the game</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/HSM.png);">
												</div>
												<span class="user">HSM</span>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>GO BRUCEY!!!</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/Matilda.png);">
												</div>
												<span class="user">Matilda</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>You're killing me smalls!</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/TheSandlot.png);">
												</div>
												<span class="user">The Sandlot</span>
											</div>
										</div>
									</div>
									<!-- -->
								</div>

								<div class="col-md-12">
									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>Screaming helps but laughing is better</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/MonstersInc.png);">
												</div>
												<span class="user">Monster Inc</span>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>You can find this item up Christopher</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/PulpFiction.png);">
												</div>
												<span class="user">Pulp Fiction</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="testimony-entry animate-box">
												<div class="feed-bubble">
													<p>The best way to win someone over</p>
												</div>
												<div class="author-img img-responsive" style="background-image: url(images/sayAnything.png);">
												</div>
												<span class="user">Say Anything</span>
											</div>
										</div>
									</div>

								</div>

								<div class="col-md-12">
									<div class="row">
										<div class="testimony-entry animate-box">
											<div class="feed-bubble">
												<p>Everyone has layers and in the morning, I'm making waffles.</p>
											</div>
											<div class="author-img img-responsive" style="background-image: url(images/shrek.png);">
											</div>
											<span class="user">Shrek</span>
										</div>
									</div>
								</div>
								<!-- -->

							</div>
						</div>
					</section>
				
<!-- logic for game
	each picture will have a number/letter value
--> 
<section id="fh5co-footer">
	<center><p >The Queen's Journal<br>
		Production: Valentino Muiruri<br>
		&copy; April 6, 2017</p></center>
	</section>	 
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

</body>
</html>
