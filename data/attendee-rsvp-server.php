<?php 

/// FIX THIS PAGE
/// all these queries should be dumped down to one simple function
	// this will provide a timestamp for when someone completes the rsvp
	$timestamp = date("Y-m-d H:i:s");
	//TEST TEST TEST
	//echo 'here is the whole enchilada <br>' , print_r($_POST) , '<br>';
	//echo '<br> ' , var_dump($_POST), '<br>';

	// to use throughvicesiadmire.com $db = mysqli_connect();
	$db = mysqli_connect(); // this gets us in the door to the database - passes the root file, password, and the db name
	// Check connection
	if (!$db) // if the database is disconnected , as in, if the database returns FALSE then output is Unable to connect to the database server
		{ 
			$output = 'Unable to connect to the database server.'; 
			include 'output.html.php'; 
			exit(); 
		}
/// okay, attempt two is below ================= part 2
	$query_gn = $_POST['group-num'];
	//echo $query_gn;

	$rsvp_arr = [];
	$id_arr = [];

	if (!empty($_POST['attendee-id-grp1'])){
		$id_1 = $_POST['attendee-id-grp1'];
		array_push($id_arr, $id_1);
	}

	if (!empty($_POST['rsvp-grp1'])){
		$rsvp_1 = strval($_POST['rsvp-grp1']);
		array_push($rsvp_arr, $rsvp_1);
	}

	if (!empty($_POST['attendee-id-grp2'])){
		$id_2 = $_POST['attendee-id-grp2'];
		array_push($id_arr, $id_2);
	}

	if (!empty($_POST['rsvp-grp2'])){
		$rsvp_2 = strval($_POST['rsvp-grp2']);
		array_push($rsvp_arr, $rsvp_2);
	}

	if (!empty($_POST['attendee-id-grp3'])){
		$id_3 = $_POST['attendee-id-grp3'];
		array_push($id_arr, $id_3);
	}

	if (!empty($_POST['rsvp-grp3'])){
		$rsvp_3 = strval($_POST['rsvp-grp3']);
		array_push($rsvp_arr, $rsvp_3);
	}

	if (!empty($_POST['attendee-id-grp4'])){
		$id_4 = $_POST['attendee-id-grp4'];
		array_push($id_arr, $id_4);
	}

	if (!empty($_POST['rsvp-grp4'])){
		$rsvp_4 = strval($_POST['rsvp-grp4']);
		array_push($rsvp_arr, $rsvp_4);
	}

	if (!empty($_POST['attendee-id-grp5'])){
		$id_5 = $_POST['attendee-id-grp5'];
		array_push($id_arr, $id_5);
	}

	if (!empty($_POST['rsvp-grp5'])){
		$rsvp_5 = strval($_POST['rsvp-grp5']);
		array_push($rsvp_arr, $rsvp_5);
	}

	if (!empty($_POST['attendee-id-grp6'])){
		$id_6 = $_POST['attendee-id-grp6'];
		array_push($id_arr, $id_6);
	}

	if (!empty($_POST['rsvp-grp6'])){
		$rsvp_6 = strval($_POST['rsvp-grp6']);
		array_push($rsvp_arr, $rsvp_6);
	}

	if (!empty($_POST['attendee-id-grp7'])){
		$id_7 = $_POST['attendee-id-grp7'];
		array_push($id_arr, $id_7);
	}

	if (!empty($_POST['rsvp-grp7'])){
		$rsvp_7 = strval($_POST['rsvp-grp7']);
		array_push($rsvp_arr, $rsvp_7);
	}

	if (!empty($_POST['attendee-id-grp8'])){
		$id_8 = $_POST['attendee-id-grp8'];
		array_push($id_arr, $id_8);
	}

	if (!empty($_POST['rsvp-grp8'])){
		$rsvp_8 = strval($_POST['rsvp-grp8']);
		array_push($rsvp_arr, $rsvp_8);
	}

	if (!empty($_POST['attendee-id-grp9'])){
		$id_9 = $_POST['attendee-id-grp9'];
		array_push($id_arr, $id_9);
	}

	if (!empty($_POST['rsvp-grp9'])){
		$rsvp_9 = strval($_POST['rsvp-grp9']);
		array_push($rsvp_arr, $rsvp_9);
	}

	if (!empty($_POST['attendee-id-grp10'])){
		$id_10 = $_POST['attendee-id-grp10'];
		array_push($id_arr, $id_10);
	}

	if (!empty($_POST['rsvp-grp10'])){
		$rsvp_10 = strval($_POST['rsvp-grp10']);
		array_push($rsvp_arr, $rsvp_10);
	}

	$com_arr = array_combine($id_arr, $rsvp_arr);

/* //// TESTS TESTS TESTS TESTS TESTS TESTS 			
	foreach($rsvp_arr as $note){
		echo $note." here it is, the piece of the rsvp array". "<br>";
	}

	foreach($id_arr as $note){
		echo $note." here it is, the piece of the rsvp array". "<br>";
	}
*/
	$plusFullName_arr = [];
	$plus_first_arr = [];
	$plus_last_arr = [];


	$id = $_POST['partner-id1'];

	//TEST TEST TEST
	// echo $id;

	if ( (isset($_POST['plus-one-first1']) && preg_match('/^[A-Za-z -]+[^\=0-9\'\"\;\@\*]+$/', $_POST['plus-one-first1'])) || (isset($_POST['plus-one-last1']) && preg_match('/^[A-Za-z -]+[^\=0-9\'\"\;\@\*]+$/', $_POST['plus-one-last1'])) )  {
		$partner_id = $_POST['partner-id1']; 
		$plus_f = ucwords($_POST['plus-one-first1']);
		$plus_l = ucwords($_POST['plus-one-last1']);
		$plus_f = mysqli_real_escape_string($db, htmlspecialchars($plus_f));
		$plus_l = mysqli_real_escape_string($db, htmlspecialchars($plus_l));
		array_push($plusFullName_arr, $plus_f, $plus_l);

		$plusFullName = $plus_f.' '.$plus_l;
		$plus_sql_1 = ','. $plus_f . ',' . $plus_l;

		$plus_sql_attnd="INSERT INTO
							`attendees` (group_num, first_name, last_name, partner_id, rsvp, is_plus_one, date_entered)
						 SELECT 	
						 	'".$query_gn."','".$plus_f."', '". $plus_l."','".$partner_id."','Attending', 1, '".$timestamp."'
						 FROM
						 	dual
						 WHERE NOT EXISTS 
							(SELECT is_plus_one_assigned FROM `attendees` WHERE partner_id ='".$partner_id."');"
						;

		$plus_sql_assnd="UPDATE
							`attendees`
						SET 
							is_plus_one_assigned = '1'
						WHERE
							id = ".$partner_id.";"
						;


		$plus_sql_grp= 	"UPDATE
								`groups`
						SET
								full_name_one = (CASE
							    					WHEN full_name_one IS NULL 
							    						AND full_name_two IS NULL 
							    						AND full_name_three IS NULL THEN '".$plusFullName."'
							                    	ELSE full_name_one
							                    END),

							    full_name_two = (CASE
							    					WHEN full_name_two IS NULL 
							    						AND full_name_three IS NULL 
							    						AND full_name_one IS NOT NULL
							    						AND full_name_one != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_two
							                    END),

							    full_name_three = (CASE
							    					WHEN full_name_three IS NULL 
							    						AND full_name_four IS NULL 
							    						AND full_name_two IS NOT NULL
							    						AND full_name_two != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_three
							                    END),

							    full_name_four = (CASE
							    					WHEN full_name_four IS NULL 
							    						AND full_name_five IS NULL 
							    						AND full_name_three IS NOT NULL
							    						AND full_name_three != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_four
							                    END),


							    full_name_five = (CASE
							    					WHEN full_name_five IS NULL 
							    						AND full_name_six IS NULL 
							    						AND full_name_four IS NOT NULL
							    						AND full_name_four != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_five
							                    END),

							    full_name_six = (CASE
							    					WHEN full_name_six IS NULL 
							    						AND full_name_seven IS NULL 
							    						AND full_name_five IS NOT NULL
							    						AND full_name_five != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_six
							                    END),

							    full_name_seven = (CASE
							                       	WHEN full_name_seven IS NULL
							                       		AND full_name_eight IS NULL 
							                       		AND full_name_six IS NOT NULL 
							                       		AND full_name_six != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_seven
							                      END),

							    full_name_eight = (CASE
							                       	WHEN full_name_eight IS NULL
							                       		AND full_name_nine IS NULL 
							                       		AND full_name_seven IS NOT NULL
							                       		AND full_name_seven != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_eight
							                      END),

							    full_name_nine = (CASE
							    					WHEN full_name_nine IS NULL 
							    						AND full_name_ten IS NULL 
							                       		AND full_name_eight IS NOT NULL
							                       		AND full_name_eight != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_nine
							                    END),

							    full_name_ten = (CASE
							    					WHEN full_name_ten IS NULL 
							    						AND full_name_nine IS NOT NULL
							                       		AND full_name_nine != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_ten
							                    END)
							WHERE
								group_num =".$query_gn.";"
							;

		$results_plus_attnd = mysqli_query($db, $plus_sql_attnd) or die(mysqli_error($db));
		$results_plus_grp = mysqli_query($db, $plus_sql_grp) or die(mysqli_error($db));
		$results_plus_assnd = mysqli_query($db, $plus_sql_assnd) or die(mysqli_error($db));

	} // elseif(preg_match('/[A-Za-z -]+[\=0-9\'\"\;\@\*]+/', $_POST['plus-one-first1']) || preg_match('/[A-Za-z -]+[\=0-9\'\"\;\@\*]+/', $_POST['plus-one-last1'])){
		// echo "<h4>Sorry, please only enter letters in your entry</h4>";
	//}

	if (!empty($_POST['plus-one-first2']) || !empty($_POST['plus-one-last2']) ){
		$partner_id = $_POST['partner-id2']; 
		$plus_f = ucwords($_POST['plus-one-first2']);
		$plus_l = ucwords($_POST['plus-one-last2']);

		$plus_f = mysqli_real_escape_string($db, htmlspecialchars($plus_f));
		$plus_l = mysqli_real_escape_string($db, htmlspecialchars($plus_l));
		array_push($plusFullName_arr, $plus_f, $plus_l);

		$plusFullName = $plus_f.' '.$plus_l;
		$plus_sql = ','. $plus_f . ',' . $plus_l;
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);

		$plus_sql_attnd="INSERT INTO
							`attendees` (group_num, first_name, last_name, partner_id, rsvp, is_plus_one, date_entered )
						 SELECT 	
						 	'".$query_gn."','".$plus_f."', '". $plus_l."','".$partner_id."','Attending', 1, '".$timestamp."'
						 FROM 
						 	dual
						 WHERE NOT EXISTS 
							(SELECT * FROM `attendees` WHERE partner_id ='".$partner_id."');"
						;

		$plus_sql_assnd="UPDATE
							`attendees`
							SET 
								is_plus_one_assigned = '1'
						WHERE
							id = ".$partner_id.";"
						;

		$plus_sql_grp= 	"UPDATE
								`groups`
							SET
								full_name_one = (CASE
							    					WHEN full_name_one IS NULL 
							    						AND full_name_two IS NULL 
							    						AND full_name_three IS NULL THEN '".$plusFullName."'
							                    	ELSE full_name_one
							                    END),

							    full_name_two = (CASE
							    					WHEN full_name_two IS NULL 
							    						AND full_name_three IS NULL 
							    						AND full_name_one IS NOT NULL
							    						AND full_name_one != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_two
							                    END),

							    full_name_three = (CASE
							    					WHEN full_name_three IS NULL 
							    						AND full_name_four IS NULL 
							    						AND full_name_two IS NOT NULL
							    						AND full_name_two != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_three
							                    END),

							    full_name_four = (CASE
							    					WHEN full_name_four IS NULL 
							    						AND full_name_five IS NULL 
							    						AND full_name_three IS NOT NULL
							    						AND full_name_three != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_four
							                    END),


							    full_name_five = (CASE
							    					WHEN full_name_five IS NULL 
							    						AND full_name_six IS NULL 
							    						AND full_name_four IS NOT NULL
							    						AND full_name_four != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_five
							                    END),

							    full_name_six = (CASE
							    					WHEN full_name_six IS NULL 
							    						AND full_name_seven IS NULL 
							    						AND full_name_five IS NOT NULL
							    						AND full_name_five != '".$plusFullName."' THEN '".$plusFullName."'
							                    	ELSE full_name_six
							                    END),

							    full_name_seven = (CASE
							                       	WHEN full_name_seven IS NULL
							                       		AND full_name_eight IS NULL 
							                       		AND full_name_six IS NOT NULL 
							                       		AND full_name_six != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_seven
							                      END),

							    full_name_eight = (CASE
							                       	WHEN full_name_eight IS NULL
							                       		AND full_name_nine IS NULL 
							                       		AND full_name_seven IS NOT NULL
							                       		AND full_name_seven != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_eight
							                      END),

							    full_name_nine = (CASE
							    					WHEN full_name_nine IS NULL 
							    						AND full_name_ten IS NULL 
							                       		AND full_name_eight IS NOT NULL
							                       		AND full_name_eight != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_nine
							                    END),

							    full_name_ten = (CASE
							    					WHEN full_name_ten IS NULL 
							    						AND full_name_nine IS NOT NULL
							                       		AND full_name_nine != '".$plusFullName."' THEN '".$plusFullName."'
							                     	ELSE full_name_ten
							                    END)
							WHERE
								group_num =".$query_gn.";"
							;

		$results_plus_attnd = mysqli_query($db, $plus_sql_attnd) or die(mysqli_error($db));
		$results_plus_grp = mysqli_query($db, $plus_sql_grp) or die(mysqli_error($db));
		$results_plus_assnd = mysqli_query($db, $plus_sql_assnd) or die(mysqli_error($db));
	}

	if (!empty($_POST['plus-one-first3']) || !empty($_POST['plus-one-last3']) ){
		$plus_f_3 = $_POST['plus-one-first3'];
		$plus_l_3 = $_POST['plus-one-last3'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first4']) || !empty($_POST['plus-one-last4']) ){
		$plus_f_4 = $_POST['plus-one-first4'];
		$plus_l_4 = $_POST['plus-one-last4'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first5']) || !empty($_POST['plus-one-last5']) ){
		$plus_f_5 = $_POST['plus-one-first5'];
		$plus_l_5 = $_POST['plus-one-last5'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first6']) || !empty($_POST['plus-one-last6']) ){
		$plus_f_6 = $_POST['plus-one-first6'];
		$plus_l_6 = $_POST['plus-one-last6'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first7']) || !empty($_POST['plus-one-last7']) ){
		$plus_f_7 = $_POST['plus-one-first7'];
		$plus_l_7 = $_POST['plus-one-last7'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first8']) || !empty($_POST['plus-one-last8']) ){
		$plus_f_8 = $_POST['plus-one-first18'];
		$plus_l_8 = $_POST['plus-one-last18'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first9']) || !empty($_POST['plus-one-last9']) ){
		$plus_f_9 = $_POST['plus-one-first9'];
		$plus_l_9 = $_POST['plus-one-last9'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

	if (!empty($_POST['plus-one-first10']) || !empty($_POST['plus-one-last10']) ){
		$plus_f_10 = $_POST['plus-one-first10'];
		$plus_l_10 = $_POST['plus-one-last10'];
		array_push($plus_first_arr, $plus_f);
		array_push($plus_last_arr, $plus_l);
	}

$name_arr = array_combine($plus_first_arr, $plus_last_arr);


	// this one will combine the last name and first name into one index in an array. 
	///// useful if we want to use the full name option in the group table
/*
	$combine_array= [];
	$i = -1;
	foreach($plus_first_arr as $name){
		$i++;
		array_push($combine_array, $plus_first_arr[$i] . $plus_last_arr[$i]);
	}
*/
	///// okay cool, this combines 


	$com_arr = array_combine($id_arr, $rsvp_arr);

	//$this_num = (abs((20-sizeof($_POST)))); // getting the length of the _POST to delete those items from rsvp_arr -- this WILL NEED TO BE ADJUSTED. works right now because there are 15 key values being sent. id, rsvp, email x 5 (in this test on 3/1/2020) -- the $rsvp_arr will need to change if it is going to account for an email for each person. 
	//echo "this is this resulting from the size of the POST array " . $this_num;

	//$just_values = array_values($_POST);

	//$rsvp_arr = array_splice($rsvp_arr, (20 - $this_num), $this_num);
	//echo "this is the size of the rsvp array " . sizeof($rsvp_arr);

	//for($i = 0; $i < 10; $i++) {
	//	if($i % 2 === !0){
	//		$rsvp_arr[$i] = $_POST[$i];
	//	} elseif($i % 2 === 0){
	//		$rsvp_arr[$i] = $_POST[$i];
	//	}
	//}

		

	if(!empty($_POST)){ ///  if (the array is not empty) which means, if it is not null and if it is not an empty string
		// $query_gn =  mysqli_real_escape_string($db, htmlspecialchars($query_gn)); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        // mysql_real_escape_string makes sure nobody uses SQL injection

		// okay, now, one by one we're going to change each attendee's RSVP status according to which button they pressed
		// --> then, if they declined, we'll go ahead and wipe any plus-one's they have off the map. 
		// --> I didn't bother to check whether or not there was a plus one assigned, or blah blah blah, because our main goal is
		// ---> to wipe the data - if this proves to take too long though, I'll have to revisit. 
		foreach($com_arr as $key=>$value){
			$sql="	UPDATE 
						`attendees`
					SET 
						`rsvp`= (CASE 
									WHEN `id` = ".$key." THEN '".$value."'
								END),
						date_rsvped = (CASE
											WHEN `id` = ".$key." THEN '".$timestamp."'
										END)
					WHERE 
						`id` = ".$key." ;"
				;


			//TEST TEST TEST
			// echo $sql;
			$results = mysqli_query($db, $sql) or die(mysqli_error($db)); 

			if($value === "Declined"){

				$sql3="	SELECT 
					a.id,
					(
						SELECT 
							concat(b.first_name, ' ', b.last_name) as 'full_name' 
						FROM 
							attendees b 
						WHERE 
							b.is_plus_one = 1 
							AND b.partner_id = a.id  
					) as 'plus_one_full_name'

				FROM 
					attendees a
					INNER JOIN groups g ON a.group_num = g.group_num
				WHERE 
					g.group_num = ".$query_gn. "
					AND a.id =".$key."
					AND a.is_plus_one IS NULL;" 
				;

				$results3 = mysqli_query($db, $sql3) or die(mysqli_error($db));

				if(!empty($results3)){
					while($row = mysqli_fetch_array($results3, MYSQLI_BOTH)){
						$plus_one_full_name = $row['plus_one_full_name'];

						$sql4="	DELETE FROM
							`attendees`
						WHERE
							partner_id =".$key.";"
						;

						$sql5="	UPDATE 
							`groups`
						SET 
							full_name_one = (CASE 
												WHEN full_name_one = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_one
											END),
							full_name_two = (CASE 
												WHEN full_name_two = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_two
											END),
							full_name_three = (CASE 
												WHEN full_name_three = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_three
											END),
							full_name_four = (CASE 
												WHEN full_name_four = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_four
											END),
							full_name_five = (CASE 
												WHEN full_name_five = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_five
											END),
							full_name_six = (CASE 
												WHEN full_name_six = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_six
											END),
							full_name_seven = (CASE 
												WHEN full_name_seven = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_seven
											END),
							full_name_eight = (CASE 
												WHEN full_name_eight = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_eight
											END),
							full_name_nine = (CASE 
												WHEN full_name_nine = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_nine
											END),
							full_name_ten = (CASE 
												WHEN full_name_ten = '".$plus_one_full_name."' THEN NULL
												ELSE full_name_ten
											END)
							WHERE 
								group_num = ".$query_gn.";"
						;

						$sql6=	"	UPDATE 
										`attendees`
									SET 
										is_plus_one_assigned = NULL
									WHERE
										id = ".$key.";"
									;


						$results4 = mysqli_query($db, $sql4) or die(mysqli_error($db));
						$results5 = mysqli_query($db, $sql5) or die(mysqli_error($db));
						$results6 = mysqli_query($db, $sql6) or die(mysqli_error($db));
					}		
				}
			}
		}

// f*ck yes. This is the subquery using the outerquery's results. and it mothereffing works too.  - dave 3/15/20
		$sql2="	SELECT 
					a.first_name,
					a.last_name,
					a.id, 
					a.rsvp, /* making sure that the RSVP status shows up */
					(FLOOR(RAND()*(10-1+1)+1)) AS `rand_num`,
					concat(a.first_name, ' ', a.last_name) as 'full_name', 
					(SELECT concat(b.first_name, ' ', b.last_name) as 'full_name_2' FROM attendees b WHERE b.is_plus_one = 1 AND b.partner_id = a.id  ) as 'plus_one_full_name',
					(SELECT concat(a.first_name, ' is bringing ', b.first_name, ' ', b.last_name ) as 'plus_one_and_partner' FROM attendees b WHERE b.is_plus_one = 1 AND b.partner_id = a.id  ) as 'plus_one_and_partner_2'
				FROM 
					attendees a
					INNER JOIN groups g ON a.group_num = g.group_num
				WHERE 
					g.group_num = ".$query_gn. "
					AND a.is_plus_one IS NULL;" // cannot use = as an operator for null values. also, cannot compare anything to Null (!= 1) since comparing to a null value will always end up false. 
				;
		//TEST TEST TEST
		//echo $sql2;
		$results2 = mysqli_query($db, $sql2) or die(mysqli_error($db));
		//TEST TEST TEST
		//print_r($results2);
	}

	if(!empty($results) && !empty($results2)){

		if(mysqli_num_rows($results2) > 0){ // if one or more rows are actually returned from the query then perform the following
			$count_ten = 1;

			// we'll use the arrays below later in the email we send to ourselves to make sure we know
			// ---> who actually RSVP'ed
			$rsvp_list = [];
			$rsvp_name = [];

			// build an array from the plus ones and their partners as well
			$plus_ones_and_partners = [];

	        while($row = mysqli_fetch_array($results2, MYSQLI_BOTH)){
        		$id = $row['id'];
				$full_name = $row['full_name'];
				$first_name = $row['first_name'];
				$last_name = $row['last_name'];
				$rsvp = $row['rsvp'];
				$plus_one_full_name = $row['plus_one_full_name'];
				$plus_one_and_partner_2 = $row['plus_one_and_partner_2'];

				
				array_push($rsvp_name, $full_name);
				array_push($rsvp_list, $rsvp);

				// TEST TEST //
				//echo "<br>this is the rsvp: ". $rsvp."<br>";
				//echo "<br>this is the plus one: ".$plus_one_full_name."<br>";
				if($plus_one_full_name){ // as in, if $plus_one_full_name is true, as in, if it EXISTS
					echo"
						<ul>
							<li><h4>$full_name</h4></li>
								<li class='plus-one$count_ten'>
									<p class='plus-one'><span>&</span> $plus_one_full_name</p>
								</li>
							<li><h5>- $rsvp -</h5></li>
						</ul>	
						";

				} else {
					echo"
						<ul>
							<li><h4>$full_name</h4></li>
							<li><h5>- $rsvp -</h5></li>
						</ul>	
						";
				}

				// let's fill the $plus_ones_and_partners array to give us something to use for email later
				if($plus_one_and_partner_2){
					array_push( $plus_ones_and_partners, $plus_one_and_partner_2);
				}
			}
		}	
	}
	/// Let's mail this beast to us, so we know who the heck actually RSVP'ed and then
	////---- > we'll need to give an option to have the rsvp emailed to the attendee as well

	/// Let's make sure we are set up to receive emails about the RSVP
			$headers = "From: Wedding Site <jenndave@jen-n-dave.fun> \r\n";
			$headers .= "Reply-To: <jenndave@jen-n-dave.fun> \r\n";
			$headers .= "X-Mailer: PHP/".phpversion()."\r\n";
			$headers .= "X-Sender: Wedding Site <jenndave@jen-n-dave.fun>\n";
			$headers .= "X-Priority: 1\n"; // Urgent message!
			$headers .= "Return-Path: <jenndave@jen-n-dave.fun>\n"; // Return path for errors
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\n";

			// use plus_ones_and_partners to show who has a plus one and is bringing one
			$email_plus_one_text = '';
			if(!empty($plus_ones_and_partners)){
				foreach($plus_ones_and_partners as $group_names){
					$email_plus_one_text .= $group_names;
					$email_plus_one_text .= "\n";
				}
			}

			// we need an array to comb through with foreach() in order to build the email
			$rsvp_com_arr = array_combine($rsvp_name, $rsvp_list);

			// declare empty variable so we can build a nice string to display in the emali
			$email_main_text = '';


			foreach ($rsvp_com_arr as $key=>$value){
			    $email_main_text.= $key.'-------'.$value;
			    $email_main_text.= "\n";
			}

			$success = mail("jenmonday@comcast.net, dbcurtis81@gmail.com", 
			"Wedding Website Email — Subject: Someone RSVPed!", 
			"Hey, some RSVPs came through! Congrats!<br><pre>". $email_main_text."</pre><br>Also, if any plus ones are coming, they'll be listed below:<br><pre>".$email_plus_one_text."</pre>",
			$headers);

			if (!$success) { 
				$errorMessage = error_get_last()['message']; 
			} 		
               
	mysqli_close($db);
?>