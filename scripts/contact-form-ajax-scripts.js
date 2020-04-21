function sendForm(e){
	e.preventDefault();
	return false;
}


// this finally works to stop form submission. I removed the onclick function from the submit button as well
$( "#contact-form" ).submit(function( event ) {
  console.log( "Handler for .submit() called." );
  event.preventDefault();
});


function sendEmail() { /// ----- this needs better validation - ---- /////
	// TEST
	////console.log("bingo");
	

	// get the values from the form. one. by. one.
	var form_name = document.getElementById("cf-name").value;
	var form_email = document.getElementById("cf-email").value;
	//var form_subject = document.getElementById("cf-subject").value;
	var form_message = document.getElementById("cf-message").value;
	var form_answer = document.getElementById("cf-number-answer").value.toString();

	var form_data = [form_name, form_email, /*form_subject,*/ form_message, form_answer];

	var pattern = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/;
	//console.log(pattern);

	var wittyResp = "<p>Say whaaaaaa? The machine musta done broked<br>cuz you entered " + form_answer + 
						"<br>... and you KNOW that ain't right.<br> You, uh, you DO know that, don't you?</p><br><br>";
	
	// create an array for my clever maths responses
	var resp_arr = ["<p>Uh... Nope. The answer you provided to the math question was incorrect. Please try again</p><br><br>", 
					"<p>C'mon now</p><p>3 - 1 is not" + form_answer + "</p><p><a href='https://tinyurl.com/wpmympv'>Check it on Google</a></p>", 
					"<p>3 - 1.<br>It's. Not. That. Hard.</p><p>Please try again</p><br><br>", 
					"<p>The princess is in another castle</p><p>And your answer was incorrect</p><p>Please try again</p><br><br>", 
					"<p>Errrrm, you do maths like the Bride-to-Be!<br>Better try again!</p><br><br>", 
					"<p>Try again</p><p>The answer you provided was not correct</p><br><br>", 
					wittyResp, 
					"<p>Sorry" + form_name + "that answer was incorrect.</p><br><br>",
					"<p>" + form_name + " no maths good</p><br><br>", 
					"<p>No, that wasn't right," + form_name + ".</p><p>If you'd like to give it another shot, I recommend that you check out<a href='https://www.khanacademy.org/math/cc-kindergarten-math'> this site</a> first</p><br><br>",
					"<p>You lose</p><br><br><p>Please try again</p>", 
					"<p>Game over man, game over!</p><br><br>"];
	// did any data get entered? if not, then return false to stop submission and let the
	// "required" fields do their work.
	// if SO, then proceed with submission
	//console.log("test");
	if(form_name && form_email /* && form_subject */ && form_message && form_answer){
		console.log("moving right along");
		// great, everything is filled, but hey, did the question get answered correctly?
		// if not, then cancel the form by replacing everything with some rather rude text
		if(form_answer != 2){
			let randNum = Math.floor(Math.random() * 12);
			document.getElementById("contact-form").innerHTML =  resp_arr[randNum];
		//And, of course, if the question was answered correctly then continue
		} else if (pattern.test(String(form_email).toLowerCase()) === false){
			// console.log('sumithin wrong with email');
			// this is just a quick email validation before the form heads off to the server
			document.getElementById("cf-email").style = "box-shadow: inset 0 0 0 2px rgba(255,0,0,1)";
			alert("Please check your email address");
			return false;
		} else {

			var xhr;

			if (window.XMLHttpRequest) { // Mozilla, Safari, ...
				xhr = new XMLHttpRequest();

			} else if (window.ActiveXObject) { // IE 8 and older
			    xhr = new ActiveXObject("Microsoft.XMLHTTP");

			}

			// collect the data that will be sent to the server to execute
			var data = "cf-name=" + form_name + "&cf-email=" + form_email + /* "&cf-subject=" + form_subject + */"&cf-message=" + form_message;
			console.log(data);

			// XMLHttpRequest.open(method, url[, async[, user[, password]]])
			// initializes a newly-created request (or re-initializes an existing one)
			// username and password are for authentication purposes only
		    xhr.open("POST", "data/contact-form-server.php", true); // 'true' is async 'false' is synchronous


		    //HTTP request header is the information, in the form of a text record, 
		    //that a user's browser sends to a Web server containing the details of what 
		    //the browser wants and will accept back from the server. The request header 
		    //also contains the type, version and capabilities of the browser that is 
		    //making the request so that server returns compatible data.
		    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   

		    // sends data to the server
		    xhr.send(data);

		    console.log(xhr.responseText);


			xhr.onreadystatechange = display_data;
			function display_data() {
				if (xhr.readyState == 4) {
		     		if (xhr.status == 200) {

		     			// let us know it was sent "responseText" returns response data as string
		       			//alert(xhr.responseText);
		       			// let's be sure that it returns everything and replaces the text in the form
		       			// if someone wants to send another message, they'll have to reload the page	   
			  			document.getElementById("contact-form").innerHTML = xhr.responseText;

		     	 	} else {
		       			 alert('There was a problem with the request.');
		      		}
		     	}
			}
		}
	}
}

function hideBox(x) {

}

function cf_verify() {
	return false;
}







/* CASHED the Jquery nonsense. 

		$(document).ready(function(){
		    $('#cf-submit').click(function(){
		        var cf_name = $('#cf-name').val();
		        var cf_email = $('#cf-email').val();
		        var cf_messg = $('#cf-message').val();

		        if (cf_name=='' || cf_email=='' || cf_messg==''){
		            alert("Please complete all contact form fields");
		            return false;
		        }

		        $.ajax({
		            type: 'post',
		             url: 'data/contact-form-server.php',
		            data: 'cf_name='+cf_name+'&cf_email='+cf_email+'&cf_messg='+cf_messg,
		        }); 
		    }); 
		});
*/