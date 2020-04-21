
<?php

// gets value sent over search form - POST not Get
	$query_fn = trim($_POST['full-name-query']); /// this is the INDEX of the data that is being sent over!!! so, essentially, WHAT data is associated with the index "first-name-query" ya dig? 



	//if (!empty($query_fn)) {
	//	echo "not empty";
	//}

	$arr = [$query_fn];

	//foreach($arr as $word){ /// allows us to echo the ARRAY -- just so we can be sure that the array came over
	//	echo $word;
	//}

	//// BELOW I have an array that stores each variable as its name and its value by using !!!!compact()!!!!!
	//$quer_arr = array('query_fn');
	//$result = compact($quer_arr);
	//print_r($result);


	$min_length = 1; // setting a minimum length variable for some reason - prevent some errors maybe

	// to use throughvicesiadmire.com $db = mysqli_connect();
	$db = mysqli_connect(); // this gets us in the door to the database - passes the localhost, root file, password, and the db name
	// Check connection

	if (!$db) // if the database is disconnected , as in, if the database returns FALSE then output is Unable to connect to the database server
		{ 
			$output = 'Unable to connect to the database server.'; 
			include 'output.html.php'; 
			exit(); 
		}

	if(!empty($arr) && preg_match('/^[A-Za-z -]+[^\=0-9\'\"\;\@\*]+$/', $query_fn)){ ///  if (the string is not empty)- better than isset() and the string contains only letters (prevent sql injection)
		$query_fn =  mysqli_real_escape_string($db, htmlspecialchars($query_fn)); 
	        // changes characters used in html to their equivalents, for example: < to &gt;
	        // mysql_real_escape_string makes sure nobody uses SQL injection
		$sql =  "SELECT 
					* 
				FROM 
					groups 
				WHERE 
					(	full_name_one LIKE '%".$query_fn."%' 
						OR full_name_two LIKE '%".$query_fn."%' 
						OR full_name_three LIKE '%".$query_fn."%' 
						OR full_name_four LIKE '%".$query_fn."%'
						OR full_name_five LIKE '%".$query_fn."%'
						OR full_name_six LIKE '%".$query_fn."%' 
						OR full_name_seven LIKE '%".$query_fn."%' 
						OR full_name_eight LIKE '%".$query_fn."%' 
						OR full_name_nine LIKE '%".$query_fn."%' 
						OR full_name_ten LIKE '%".$query_fn."%' 
					)";
				
/*
				"SELECT 
					id,
					group_num,
					concat(first_name, ' ', last_name) as full_name
				FROM
					`attendees`
				WHERE
					concat(first_name, ' ', last_name) LIKE '%".$query_fn."%'
				GROUP BY
					group_num;";
*/
				//ORDER BY 
					//".$sort_ln; -- if there is a checkbox needed to use, then we can use this to make sure that we are ordering things by this selection 

		// echo $sql; // print to the scren
		$results = mysqli_query($db, $sql) or die(mysqli_error($db)); /// '.' will join the string as a CONCAT - but why there in between the quotes? Not sure
	    
	    // TEST TEST TEST TEST
	    //print_r($results);
	         // from here, the rest is just icing. I know how to write the queries, so I just have to build the right PHP file to utilize each of the queries we might want. Don't wanna sound positive or nuthing. This could work. 

			if(mysqli_num_rows($results) > 0){ // if one or more rows are actually returned from query then perform the following
		             
		        while($row = mysqli_fetch_array($results, MYSQLI_BOTH)){
		        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
		        	/* // trying to use the attendee database to populate the group names
		        	$group_num = $row['group_num'];
		        	$id = $row['id'];
		        	$full_name = $row['full_name'];
		        	*/
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

					
				// all the various variables are created ABOVE to be used BELOW in the echo

				/* ========= BELOW !!!! !!! the input type='hidden' creates a button with the client number 
				 so the searcher can click it to go to the client's customized page !!!! =============== */
				/* ========= BELOW ==============!!!! the style is included because the css won't render again after
				 the page is already loaded -- might be able to fix with jquery of javascript */ // I'm including the classes in the paragraph so that I can style them once they are put in the page
		            echo"
		            	<br>
		            	<div class='results-wrapper'>
		            		<div class='name-results-box'>	
			           			<p class='c-name c-id'>$full_name_one</p>
				           		<p class='c-name c-id'>$full_name_two</p>
				           		<p class='c-name c-id'>$full_name_three</p>
				           		<p class='c-name c-id'>$full_name_four</p>
				           		<p class='c-name c-id'>$full_name_five</p>
				           		<p class='c-name c-id'>$full_name_six</p>
				           		<p class='c-name c-id'>$full_name_seven</p>
				           		<p class='c-name c-id'>$full_name_eight</p>
				           		<p class='c-name c-id'>$full_name_nine</p>
				           		<p class='c-name c-id'>$full_name_ten</p>
				           		<!-- test only 
				           		<p class='c-name c-id'>$group_num</p> 
				           		-->
				           	</div>
				           	<div class='results-form-box'>
				           		<div id='interior-form-box'>
				            		<form action='../pages/attendee-rsvp-page.php' method='POST'>
										<input type='hidden' name='group-num' value='$group_num' style='display: hidden;'>
										<input type='Submit' class='attendee-group-link' name='submit_button' value='SELECT'>
									</form>
								</div>
							</div>
						</div>
						<hr>
							";
						// type='hidden' ABOVE means that the input will not show - merely being used to store the variable so that it can be sent with the POST
		            // this will show an echo with the results and then the AJAX code displays it in the suggestion div
	       		} // while loop closes (the iteration over the returned rows of information)

		    } else { // if there is no matching rows do following
		         echo 	"	<br>
		         			<div id='sorry-text'>
			         			<h4>We couldn't match your name to a group :(</h4>
			         			<br>
			         			<p>Please try again, or email Jen and Dave if you have a question</p>
			         			<br>
			         		</div>
		         		";
		    } 

	} elseif (preg_match('/[A-Za-z -]+[\=0-9\'\"\;\@\*]+/', $query_fn)){
			echo "<br>
					<h4>Please be sure to type your name correctly</h4>"; 

	} elseif (strlen($query_fn) <= 1){
		echo "<br>
				<h4>Minimum name length is ".$min_length." letter</h4>";

	} else {
		echo "<br>
				<h4>We couldn't find any matches for your group. Please email Jen and Dave with your information</h4>";
	}
	                  
	mysqli_close($db);
	/* //// not sure about this one
	$query = "SELECT * FROM `client_info` WHERE last_name LIKE ?"; ## the SELECT statement that finds our dataset

	$result = mysqli_query($db, $query);;
	if (msql_num_rows($result) > 0) {
	// output data of each row
		while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>" . $row["password"]. "</td></tr>";
			}
		echo "</table>";
		} else { echo "0 results"; }
	$conn->close();
	*/
?>