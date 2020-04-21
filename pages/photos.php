<!doctype html>
<html>
	<head>
		<title>Jen and Dave's Wedding Website — Photo Gallery Page</title>
		<meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! This page will showcase all the photos from the wedding that we can dig up, after we have 'em in our hot little hands.">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding photo gallery, photo gallery, wedding photos">
				<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — Photo Gallery Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! This page will showcase all the photos from the wedding that we can dig up, after we have 'em in our hot little hands.">
        <meta property="og:url" content="http://www.jen-n-dave.fun/pages/travel.php">
		<?php include("../prefab/head.php") ?>
	</head>
	<body onload="activateNav()">
		<div id="full-content-wrapper"> <!-- ends just after the footer, so we can push the footer to the bottom of the page -->
		 	<div id="top-image">
	   			<div id="top-content"> <!-- this div ENCLOSES the navigation -->
	   				<?php include("../prefab/navigation.php") ?>
	   			</div>
			<div class="rsvp-wrapper"> <!-- nothing to see here, just keeping the rest of the shit in line, muhfugga -->
				<div class="rsvp-box-main">
					<div class="rsvp-box-interior">
						<div class="rsvp-box-interior-two">
							<h2>nothing to see here. . . yet!</h2>
							<br><br><br><br>
							<p>As soon as the wedding photos start flowing in, then we'll stack this thing out with the best of 'em!</p>
							<br>
								<div class="form-box">
									<form>
									</form>
								</div>
								<div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- footer is included in the full content in the hopes that we can push down to the
				with absolute positioning -->
	<?php include("../prefab/footer.php") ?>
	</body>
		<script type = "text/javascript" language = "javascript" src="../scripts/page-scripts.js"></script>
		<script type = "text/javascript" language = "javascript" src="../scripts/attendee-search-scripts.js"></script>
</html>