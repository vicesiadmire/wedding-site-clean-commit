<?php
	session_start();

	$password = $_SESSION['this_password'];

	// just checking to be sure that the session variables are being passed between one another
	// -- long story short, they are. hot damn
	//echo $_SESSION['favcolor'];
	//echo $_SESSION['this_password'];

	if(!isset($_SESSION['this_password'])){
	   header('location: rsvp.php');
	}

?>

<!doctype html>
<html>
	<head>
		<meta HTTP-EQUIV="Pragma" content="no-cache">
		<!-- -1 disables caching of the page -->
		<meta HTTP-EQUIV="Expires" content="-1">
		<title>Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — Attendee's RSVP Completion Page</title>
		<meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! This is the completed RSVP page for those who have completed the RSVP for themeselves or their group. From here, you can edit your attendance status for the wedding, or you can print a copy of your RSVP, or you can even have one emailed to you.">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding rsvp form, RSVP, completed rsvp">
				<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — Attendee's RSVP Completion Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! This is the completed RSVP page for those who have completed the RSVP for themeselves or their group. From here, you can edit your attendance status for the wedding, or you can print a copy of your RSVP, or you can even have one emailed to you.">
        <meta property="og:url" content="http://www.jen-n-dave.fun/pages/attendee-rsvp-page-complete.php">
		<?php include("../prefab/head.php"); ?>
	</head>
	<body onload="activateNav()">
		<?php include("../prefab/navigation.php"); ?>

		<div class="rsvp-wrapper"> <!-- nothing to see here, just keeping the rest of the page in line, muhfugga -->
			<div class="rsvp-box-main">
				<div class="rsvp-box-interior">
					<div class="rsvp-box-interior-two">
						<h2>rsvp</h2>
						
							<img class="rsvp-top-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
						
							<div class="attendee-rsvp-complete-form-box">
								<h3>Your RSVP is complete! Thank you!</h3>
								<hr>
								<br>
								<form id="rsvp-complete-form" name="rsvp-form" action="../pages/attendee-rsvp-page.php" method="POST"> 
									<input type="hidden" name="group-num" value="<?php echo htmlspecialchars($_POST['group-num']); ?>">
									<div id="attendee-rsvp-complete-wrapper">
										<div id="attendee-rsvp-complete-interior">
											<div id="attendee-rsvp-complete-wedding-info">
											<hr>
											<br>
												<h3>Wedding</h3>
												<h5>10/3/2020</h5>
													<br>
												<h5>4:00pm - 11:00pm</h5>
													<br>
												<h4><a href="https://www.baldoriaevents.com">Baldoria on the Water</a></h4>
											<br>
											<br>
											<hr>
											</div>
											<div id='attendee-rsvp-complete-box'>
												<?php include("../data/attendee-rsvp-server.php"); ?>
											</div>
						    			</div>
						    		</div>
						    		<br>
						    		<br>
				    				<!-- <label name='edit-rsvp-status'> --> 
			    						<input type='submit' value='EDIT RSVP' id='edit-rsvp-status'>
			    					<!-- </label> -->
								</form>

							</div>
							<div id="attendee-results-box">
							</div>
							
								<img class="rsvp-bottom-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
							
					</div>
				</div>
			</div>
		</div>
		<?php include("../prefab/footer.php") ?>
	</body>
	<script type = "text/javascript" language = "javascript" src="../scripts/page-scripts.js"></script>

</html>