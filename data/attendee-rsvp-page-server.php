<?php 
	$query_gn = $_POST['group-num']; /// this is the INDEX of the data that is being sent over!!! so, essentially, WHAT data is associated with the index "first-name-query" ya dig? 

	//echo "<p>".$query_gn."</p>";

	//if (!empty($query_gn)) {
	//	echo "not empty";
	//}

	$arr = [$query_gn];

	//foreach($arr as $word){ /// allows us to echo the ARRAY -- just so we can be sure that the array came over
	//	echo $word;
	//}

	//// BELOW I have an array that stores each variable as its name and its value by using !!!!compact()!!!!!
	//$quer_arr = array('query_gn');
	//$result = compact($quer_arr);
	//print_r($result);


	$min_length = 1; // setting a minimum length variable for some reason - prevent some errors maybe
	
	// to use throughvicesiadmire.com $db = mysqli_connect("", "", '', '');
	$db = mysqli_connect("", "", '', ''); // this gets us in the door to the database - passes the root file, password, and the db name
	// Check connection
	if (!$db) // if the database is disconnected , as in, if the database returns FALSE then output is Unable to connect to the database server
		{ 
			$output = 'Unable to connect to the database server.'; 
			include 'output.html.php'; 
			exit(); 
		}

	if(!empty($arr)){ ///  if (the string is not empty)- better than isset() - no need to check for anything special since we know what's in this particular array already. just a number. group number specifically
		$query_gn =  mysqli_real_escape_string($db, htmlspecialchars($query_gn)); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        // mysql_real_escape_string makes sure nobody uses SQL injection
		$sql = 	"
				SELECT 
					a.first_name,
					a.last_name,
					a.id, 
					a.plus_one,
					a.is_plus_one_assigned,
					g.group_num,
					(FLOOR(RAND()*(10-1+1)+1)) AS `rand_num`,
					concat(a.first_name, ' ', a.last_name) as `full_name`,
					(SELECT concat(b.first_name, ' ', b.last_name) as 'full_name_2' FROM attendees b WHERE b.is_plus_one = 1 AND b.partner_id = a.id  ) as 'plus_one_full_name'
				FROM 
					attendees a
					INNER JOIN groups g ON a.group_num = g.group_num
				WHERE 
					g.group_num = ".$query_gn. "
					AND a.is_plus_one IS NULL;"
				;

				//ORDER BY 
					//".$sort_ln; -- if there is a checkbox needed to use, then we can use this to make sure that we are ordering things by this selection 

				// INSERT will occur once the form is submitted and will bring up a brand new page

		$results = mysqli_query($db, $sql) or die(mysqli_error($db)); /// '.' will join the string as a CONCAT - but why there in between the quotes? Not sure

			if(mysqli_num_rows($results) > 0){ // if one or more rows are actually returned from query then perform the following
		        $count_ten = 1;  // oh snap, duh, just declare the variable and then have it iterate one each time as it goes through the rows... duh. 
		        while($row = mysqli_fetch_array($results, MYSQLI_BOTH)){ // this looks through EACH ROW! so if you have columns and multiple rows, this will loop through 'em, which means that you only have to create one echo with html to make sure each column in each row is reprsented. 
		        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

/*
		        	$group_num = $row['group_num'];
		        	$address = $row['address'];
					$apt = $row['apt_unit'];
					$city = $row['city'];
					$state = $row['state'];
					$zip = $row['zip'];
					$full_name_one = $row['full_name_one'];
					$full_name_two = $row['full_name_two'];
					$full_name_three = $row['full_name_three'];
					$full_name_four = $row['full_name_four'];
					$full_name_five = $row['full_name_five'];
					$full_name_six = $row['full_name_six'];
					$full_name_seven = $row['full_name_seven'];
					$full_name_eight = $row['full_name_eight'];
					$full_name_nine = $row['full_name_nine'];
					$full_name_ten = $row['full_name_ten'];
					$id = $row['id'];
*/
					$plus = $row['plus_one'];
					$id = $row['id'];
					$full_name = $row['full_name'];
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$rand_num = $row['rand_num'];
					$plus_assnd = $row['is_plus_one_assigned'];
					$plus_one_name = $row['plus_one_full_name'];

/*////////////////// good if we're looping through a bunch of items in one row
					$arr_two = [$full_name_one, $full_name_two, $full_name_three, $full_name_four, $full_name_five, $full_name_six, $full_name_seven, $full_name_eight, $full_name_nine, $full_name_ten];
					$arr_three = [];

					foreach($arr_two as $word){
						if(!is_null($word)){
							array_push($arr_three, $word);
						}
					}

*/

		            // BELOW: leaving the "for" attribute out because it would need to be bound to the input's ID and if I put an ID in the input then we'll have a whole mess o' the same ID floating around on the page, so instead I'll just wrap the label around it to make sure that it is connected
		            // BELOW: also, not including a name on the displayed buttons, because the values in those won't be submitted anyhow. I only want to submit data in the 'HIDDEN' inputs above them. I'll change the values with javascript when a button is clicked. I'm using buttons because those seem a bit easier to style and seem to make more sense. Well, a 'radio' would make more sense, but those are impossible to use since if I used them, in order to prevent another from being clicked, I'd have to give them the same name which then means, in this form at least, everytime I select one, I can't select another -- in ANYONE'S options. I could just allow people to select any one they want, but then I would have to hide them and style the labels with css anyhow. Why not just skip that whole mess and simply make a button that, when selected, changes the value in a hidden input which will let me update the correct column 

		            // foreach($arr_three as $word){ // unnecessary since the WHILE loop above makes sure to iterate through each row from the returned data

					//input type hidden name'rsvp' will allow us to add a value here when either of the rsvp buttons are clicked
					// type="button" value does NOT get passed by POST
			            echo"
			            	<br>
			            	<br>
			            		<div class='attendee-rsvp-group'>
									<h4>$full_name</h4>
									<input type='hidden' name='attendee-id-grp$count_ten' value='$id'>
										<ul>
											<fieldset onmousedown = 'unCheck(this)'>
												<legend value='Will we have the pleasure of your company?'></legend>
													<input type='hidden' name='rsvp-grp$count_ten' class='rsvp-input' value=''>
												<li>
													<label class='rsvp-choice-label'>
														<input name='rsvp-grp$count_ten' type='button' id='attend-btn-$count_ten' class='button attend' value='Attending!' onmousedown='activate(this)' required>
													</label>
												</li>
												<li>
													<label class='rsvp-choice-label'>
														<input name='rsvp-grp$count_ten' type='button' id='not-attend-btn-$count_ten' class='button not-attend' value='Regretfully Declines' onmousedown='activate(this)' required>
													</label>
												</li>
											</fieldset>
										</ul>
								</div>
							";

						//echo $plus . ' ' . $plus_assnd;
						if ($plus && $plus_assnd){ // if $plus (if they can HAVE a plus one) is true ( if it is not zero or null), and $plus_assnd is true
							echo"
								<br>
								<div class='plus-one-wrapper'>
									<p>Your plus one is below, we're glad they could make it!</p>
									<div class='_$count_ten' id='plus-one-div-assigned$count_ten'>
										<p class='plus-one-name'>$plus_one_name</p>
									</div>
									<p>If you would like to change their RSVP status (or change who you're taking—we won't tell) please email Jen and Dave</p>
									<input type='hidden' name='partner-id$count_ten' value='$id'/>
								</div>
								";

						} elseif ($plus && !$plus_assnd){ // if $plus is true (if they can HAVE a plus one) and $plus assnd is false( the plus one hasn't been assigned yet)
							echo"
								<br>	
								<div class='plus-one-wrapper'>
									<p>Looks like you get a plus-one,  you lucky duck!</p>
									<p>Please check the box below if you'd like to bring someone.</p>
									<p>You don't have to provide their full name, but please give us something to write on the Thank You!</p>
									<input type='hidden' name='partner-id$count_ten' value='$id'/>
									<label>Plus One
										<input type='checkbox' name='plus_one' onclick='flipDiv(this)' class='_$count_ten'/>
									</label>
									<div class='_$count_ten' id='plus-one-div$count_ten' style='display:none'>
									    	<input type='text' id='plus-one-first$count_ten' name='plus-one-first$count_ten' class='plus-one-name-entry' placeholder='firstname' />
									    	<input type='text' id='plus-one-last$count_ten' name='plus-one-last$count_ten' class='plus-one-name-entry' placeholder='lastname'/>
									</div>
								</div>
							";
						}

						echo "<br><br><hr>";

						$count_ten++;	
						// type='hidden' ABOVE means that the input will not show - merely being used to store the variable so that it can be sent with the POST
		            // this will show an echo with the results and then the AJAX code displays it in the suggestion div
				}
		    } else { // if there is no matching rows do following
		         echo "<br>
		         		<h4>We couldn't find any matches for your group</h4>
		         		<br>
		         		<p>Please email Jen and Dave with your information!</p>";
	    	} 

		} elseif (preg_match('/[A-Za-z -]+[\=0-9\'\"\;\@\*]+/', $query_gn)){
				echo "<h3>Please be sure to type your name correctly</h3>"; 

		} elseif (strlen($query_gn) <= 1){
			echo "Minimum name length is ".$min_length;

		} else {
			echo "<h3>We couldn't find any matches for your group. Please email Jen and Dave with your information</h3>";
		}
	                  
	mysqli_close($db);
?>