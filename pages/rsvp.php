<!-- the page actually displays the RSVP page, or not depending on whether or not someone is
	logged in or not -->
<?php
	session_start();
	// the below will destroy the session for testing purposes.
	/*
	session_destroy();
	session_unset();
	unset($_SESSION['this_password']);
	*/


	//	$_SESSION['this_password'] = '';
	// iF session is not started, then the session password = ''
	/* this doesn't seem necessary right now 4/6/20
	if(session_status() == PHP_SESSION_NONE) {
		$_SESSION['this_password']='';
	} else {
		$sess_pass = '';
	}
	*/
	//$sess_pass = '';

	//echo session_status();



	$_SESSION["favcolor"] = "green";
	$_SESSION["favanimal"] = "cat";
	//echo $_SESSION['favcolor'];
	//echo $_SESSION['this_password'];
	// TEST
	//echo $sess_pass;
	//echo $_POST['pass'];


	$error = '';
	$password_this = '';


	if(isset($_SESSION['this_password']) && $_SESSION['this_password'] == ''){
		$sess_pass = $password_this;
	} else {
		$sess_pass = 'none';
	}


	if(isset($_POST['submit_pass']) && $_POST['pass']){
		$pass=$_POST['pass'];

		// make sure that the session variable, 'password' is stored so it can be passed
		// -- from page to page
		$_SESSION['this_password'] = $_POST['pass'];
		$sess_pass = $_SESSION['this_password'];

		if($pass==$password_this) {
			$sess_pass=$pass;
		} else {
			$error="Incorrect Password";
		}
	}

	if(isset($_POST['page_logout'])) {
		unset($_SESSION['this_password']);
	}

	// BEGIN TIMEOUT
	$time = $_SERVER['REQUEST_TIME'];
		
		// for a 5 minute timeout, specified in seconds
		$timeout_duration = 300; // 60 seconds in a minute * 5 minutes = 300

		
		// Here we look for the user's LAST_ACTIVITY timestamp. If
		// it's set and indicates our $timeout_duration has passed,
		// blow away any previous $_SESSION data and start a new one.
		
		if (isset($_SESSION['LAST_ACTIVITY']) && 
		   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
		    session_unset();
		    session_destroy();
		    unset($_SESSION['this_password']);
		    session_start();
		}

		
		//Finally, update LAST_ACTIVITY so that our timeout
		//is based on it and not the user's login time.
		
		$_SESSION['LAST_ACTIVITY'] = $time;
?>

<!-- if everything is correct, then load the RSVP page -->
<?php
	if($sess_pass==$password_this) { ?> <!-- end the PHP to build the HTML page -->

<!doctype html>
<html>
	<head>
		<title>Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — RSVP Page</title>
		<meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! This is the RSVP page for all of our invited guests. Please be sure to have your RSVP access code ready.">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding rsvp form, RSVP">
				<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — RSVP Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! This is the RSVP page for all of our invited guests. Please be sure to have your RSVP access code ready.">
        <meta property="og:url" content="http://www.jen-n-dave.fun/pages/rsvp.php">
		<?php include("../prefab/head.php") ?>
	</head>
	<body onload="activateNav();">
	<div id="full-content-wrapper"> <!-- ends just after the footer, so we can push the footer to the bottom of the page -->
	 	<div id="top-image">
   			<div id="top-content"> <!-- this div ENCLOSES the navigation -->
   				<?php include("../prefab/navigation.php") ?>
   			</div>
			<div class="rsvp-wrapper"> <!-- nothing to see here, just keeping the rest of the shit in line, muhfugga -->
				<div class="rsvp-box-main" onresize="positionFooter()">
					<div class="rsvp-box-interior">

						<div class="rsvp-box-interior-two">
							<h2>rsvp</h2>
								<img class="rsvp-top-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
							
							<div class="form-box" id="form-box">
								<form id="search-form"> <!-- I removed the form action and method above to let AJAX handle the request, that way the data all shows up on the same page. If PHP handles the request by itself then I'll have to load an entirely NEW page to display the data for every search, which means I'll have to fit everything into one single echo - which is madness because the echo only displays as one long string. It will be really tricky to edit if I needed to. Plus, just loading the page once and then updating what's there with AJAX just makes a lot more sense. It will be cleaner and easier to read 

								Okay, I put the action and method back in for reference, but they aren't being accessed, since the input type is no longer a submit and is now just a button-->
									<label for="full-name-query">Enter your first and last name below to access the RSVP for you (or your group!)</label>
										<input type='text' name='full-name-query' id='full-name-query'>
										<br>
									<input type="submit" style="display: none" onClick="client_search(); return false;" id="attendee-search-submit"/>
							    	<input type="submit" value="SEARCH" onClick="client_search(); return false;" id="attendee-search"/>
						    		<!-- okay this is important!!!!!!!!! IMPORTANT!!! so, the ONKEYUP event basically begins the AJAX connection with every keystroke, narrowing, and supplying results as you type. cool. But, we want this to happen on the search command, or else why the **** did we build it in the first place? So remove ONKEYUP (or comment out) and then change it to the onclick even for the submit button instead-->

						    		<!-- READ READ READ READ READ READ -->
						    		<!-- !!!!!!!!!!! changed input type from "submit" to "button" and now nothing is submitted. Mother trucker. Oh and added the javascript preventdefault() below. before the form would submit (as it should) and then the php file would try to reload the page with the form data (as it should) and then we were back at square one. with the type as "button" then no submission occurs -->
								</form>
								<div id="attendee-results-box">
								</div>
								<!--
								<form method='post' action='' id='logout_form'>
									<input type='submit' name='page_logout' value='LOGOUT'>
								</form>
								-->
									<img class="rsvp-bottom-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
								
							</div>
						</div>
					</div>
				</div>
							
			</div>
		</div><!-- top-image div final tag - makes sure anything inside is hovering over the top of the
					main image --> 
	</div> <!-- footer is included in the full content in the hopes that we can push down to the
			with absolute positioning -->
					<?php include("../prefab/footer.php") ?>

	</body>
		<script type = "text/javascript" language = "javascript" src="../scripts/page-scripts.js"></script>
		<script type = "text/javascript" language = "javascript" src="../scripts/attendee-search-scripts.js"></script>

		<script type = "text/javascript" language = "javascript">
            var inputTwo = document.getElementById("search-form");
            var inputThree = document.getElementById("attendee-search-submit");
            // Execute a function when the user releases a key on the keyboard
            /*
	            inputTwo.addEventListener("keyup", function(event) {
	            // Number 13 is the "Enter" key on the keyboard
	                if (event.keyCode === 13) {
	                // Cancel the default action, if needed
	                event.preventDefault();
	                // Trigger the button element with a click
	                document.getElementById("attendee-search").click();
	                document.getElementById("")
	                }
	            })
	        */
	        console.log(inputThree);
            inputTwo.addEventListener("keyup", function(event) {
                
            // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
	                // Cancel the default action, if needed
	                event.preventDefault();
	                // Trigger the button element with a click
	                document.getElementById("attendee-search-submit").click();
	                return true;
                }
            })
/*
			$(document).on("keypress", function(e){
				if(e.which == 13){
					$("attendee-search").click();
				}
			});
*/

		</script>
</html>
			
<?php	} else { ?> <!-- begins the login page html -->

<!doctype html>
<html>
	<head>
		<title>Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — RSVP Page</title>
		<meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! This is the RSVP page for all of our invited guests. Please be sure to have your RSVP access code ready.">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding rsvp form, RSVP">
				<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — RSVP Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! This is the RSVP page for all of our invited guests. Please be sure to have your RSVP access code ready.">
        <meta property="og:url" content="http://www.jen-n-dave.fun/pages/rsvp.php">
		<?php include("../prefab/head.php") ?>
	</head>
	<body onload="activateNav()">
		<div id="full-content-wrapper"> <!-- ends just after the footer, so we can push the footer to the bottom of the page -->
		 	<div id="top-image">
	   			<div id="top-content"> <!-- this div ENCLOSES the navigation -->
	   				<?php include("../prefab/navigation.php") ?>
	   			</div>
				<div class="rsvp-wrapper"> <!-- nothing to see here, just keeping the rest of the page in line, muhfugga -->
					<div class="rsvp-box-main" onresize="positionFooter()">
						<div class="rsvp-box-interior">

							<div class="rsvp-box-interior-two login-form">
								<h2>rsvp</h2>
									<img class="rsvp-top-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">
								<div class="form-box" id="form-box">
									<form id='login-form' method='post' action='' id='login_form'>
										<h5>Please RSVP by 9/3/2020</h5>
										<br>
										<h4>Login with the code on your invitation.</h4>
										<br>
										<input type='password' name='pass' placeholder='*******'>
										<input type='submit' name='submit_pass' value='SUBMIT'>
										<p>
											<font style='color:red;'>
											<?php echo $error ?>
											</font>
										</p>
									</form>
									<br>
										<img class="rsvp-bottom-filigree-image" src="../art/filigree-for-site.png" alt="fancy filigree">					
								</div>
							</div>
						</div>
					</div>
								
				</div>
			</div><!-- top-image div final tag - makes sure anything inside is hovering over the top of the
						main image --> 
		</div> <!-- footer is included in the full content in the hopes that we can push down to the
				with absolute positioning -->
		<?php include("../prefab/footer.php") ?>

	</body>
	<script type = "text/javascript" language = "javascript" src="../scripts/page-scripts.js"></script>
		<script type = "text/javascript" language = "javascript" src="../scripts/attendee-search-scripts.js"></script>

		<script type = "text/javascript" language = "javascript">
            var inputTwo = document.getElementById("search-form");
            var inputThree = document.getElementById("attendee-search-submit");

	        console.log(inputThree);
            inputTwo.addEventListener("keyup", function(event) {
                
            // Number 13 is the "Enter" key on the keyboard
                if (event.keyCode === 13) {
	                // Cancel the default action, if needed
	                event.preventDefault();
	                // Trigger the button element with a click
	                document.getElementById("attendee-search-submit").click();
	                return true;
                }
            })

		</script>
</html>
<?php } ?>