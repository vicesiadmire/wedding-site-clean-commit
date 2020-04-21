<!doctype html>
<html>
	<head>
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