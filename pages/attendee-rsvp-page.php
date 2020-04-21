<?php
	session_start();

	$password = $_SESSION['this_password'];

	// just checking to be sure that the session variables are being passed between one another
	// -- long story short, they are. hot damn
	//echo $_SESSION['favcolor'];
	//echo $_SESSION['this_password'];

	// make sure that if the password is not set, to end the session and send 'em back to the beginning
	if(!isset($_SESSION['this_password'])) {
	   header('location: rsvp.php');
	}
?>

<!doctype html>
<html>
	<head>
		<title>Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — Attendee's Personal RSVP Page</title>
		<meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! This is your personal RSVP page for yourself, or for your group. On this page, you only need to select the RSVP status for each member of your group and submit. You may also add the RSVP status for a plus-one, when a plus-one is allowed.">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding rsvp form, RSVP, completed rsvp">
				<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — Attendee's Personal RSVP Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! This is your personal RSVP page for yourself, or for your group. On this page, you only need to select the RSVP status for each member of your group and submit. You may also add the RSVP status for a plus-one, when a plus-one is allowed.">
        <meta property="og:url" content="http://www.jen-n-dave.fun/pages/attendee-rsvp-page.php">
		<?php include("../prefab/head.php") ?>
	</head>
	<body onload="activateNav(); plusOneFix()">

	<div id="full-content-wrapper"> <!-- ends just after the footer, so we can push the footer to the bottom of the page -->
	 	
	 	<div id="top-image">
   			<div id="top-content"> <!-- this div encloses the navigation -->
   				<?php include("../prefab/navigation.php") ?>
   			</div> <!-- closing tag for top-content div -->				
   				<div class="rsvp-wrapper" onresize="positionFooter()"> <!-- nothing to see here, just keeping the rest of the page in line, muhfugga -->
					<div class="rsvp-box-main">
						<div class="rsvp-box-interior">
							<div class="rsvp-box-interior-two">
								<h2>rsvp</h2>
								
									<img class="rsvp-top-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
								
								<p class="error hidden">Be sure to select the RSVP status for each member of your group!</p>
									<div class="form-box">

										<!-- we need to return the value of the validate() function so that the form will not proceed if the validate()
											function returns false -->
										<form id="rsvp-form" name="rsvp-form" action="../pages/attendee-rsvp-page-complete.php" onsubmit="return validate()" method="POST"> 
											<input type="hidden" name="group-num" value="<?php echo htmlspecialchars($_POST['group-num']); ?>"> <!-- group-num comes in here so we can use it later when we submit this form -->
											<div id="attendee-rsvp-wrapper">
												<div id="attendee-rsvp-interior">
													<div id="attendee-rsvp-wedding-info">
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
													<div id='attendee-rsvp-accept-decline-box'>
														<?php include("../data/attendee-rsvp-page-server.php")?>
													</div>
								    			</div>
								    		</div>
								    		<br>
								    		<br>
								    		<br>
								    		<br>
							    			<div id='complete-rsvp-textarea-wrapper'>
					    						<h5>If there is anything that you think we oughtta know (i.e., food allergies, mobility requirements, music allergies, etc.) please inlude a message with your invite.</h5>
					    						<br>
					    							<label class="rsvp-message-label">
	                                    				<textarea class="small-textarea" name="rsvp-message" type="text"name="message" id="cf-message" placeholder="just a heads up!" minlength="10" maxlength="400"></textarea>
	                                    			</label> 
                                    		</div>
						    				<label>
						    					<!-- thisOne() will highlight all the unselected groups of buttons --> 
					    						<input type='submit' value='SUBMIT' id='attendee-rsvp-submission'  onclick="thisOne()">
					    					</label> 
										</form>

									</div>
									<div id="attendee-results-box">
									</div>
									
									<img class="rsvp-bottom-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
									
							</div>
						</div>
					</div>
				</div>
		</div><!-- top-image div final tag - makes sure anything inside is hovering over the top of the
				main image --> 
		<?php include("../prefab/footer.php") ?>
	</div> <!-- footer is included at the bottom of the full content div, so all of the interior content should push it to the bottom, with  relative positioning and bottom: 0 -->
	</body>
	<script type = "text/javascript" language = "javascript" src="../scripts/onload-scripts.js"></script>
	<script type = "text/javascript" language = "javascript" src="../scripts/attendee-rsvp-scripts.js"></script>
	<script type = "text/javascript" language = "javascript" src="../scripts/page-scripts.js"></script>
	<script type = "text/javascript" language = "javascript" src="../scripts/attendee-rsvp-ajax-scripts.js"></script>
	<script type = "text/javascript" language = "javascript">
		            // Get the input field
        var inputOne = document.getElementById("rsvp-form");

        // Execute a function when the user releases a key on the keyboard
        inputOne.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("attendee-rsvp-submission").click();
            }
        })
	</script>

	<script type="text/javascript" language = "javascript">
	    function flipDiv(x) {
	    	var y = x.className;
	    	console.log(y);
	        var plus = document.querySelectorAll('div.' + CSS.escape(y))[0]; /// okay, the CSS.escape is to make sure the variable is
	        																	// formated as something css recognizes. 
	        																	// like changing an int to str
	        console.log(plus);
	        plus.style.display = x.checked ? "flex" : "none"; // if x is checked, then unhide the div
	        													// so long as the div is open, then the text inputs are available, and
	        													// they will send their values to PHP
	    }
	</script>
</html>