//var elements = document.getElementsByClassName("button");
		//var ids = '';
		//for(var i=0; i<elements.length; i++) {
		 //   ids += elements[i].id;
		//}
		//document.getElementById('attendee-results-box').innerHTML = ids;

		//document.getElementById('attendee-results-box').innerHTML = x;

		////////////////////////////////////////////////////////////
		//// ASSIGN ATTENDING OR DECLINED to the Attendee file /////
		///////////////////////////////////////////////////////////
		/// function activate() makes sure that the value of attending or declined is assigned to 
		/// the hidden input so that the value can be passed to the PHP server and update the
		/// mysql database. 
		// x = the element that was clicked - populated by the attendee-rsvp-page-server.php text
		// that calls activate() on mousedown for the each (and either) the attending or decline
		// buttons
		function activate(x){
			console.log(x);
			var thisName = x.name;
			var thisID = x.id;
			var thisClass = x.className;

			// only three elements will share this name, 
			// the attending and decline buttons and the hidden input that
			// contains the actual value of attending or declined
			var arr = document.getElementsByName(thisName);
			var other_id = '';
			var arr_ids = [];
			var rsvp = '';

			//document.getElementById('attendee-results-box').innerHTML = x;
			console.log(thisName);
			console.log(thisID);
			console.log(thisClass);
			console.log(arr);

			// collect all the ids from the elements in arr and add 
			// them to the arr_ids array
			for(var i=0; i<arr.length; i++) {
				arr_ids.push(arr[i].id);
			}

			console.log('this is: ' + arr_ids);

			// if the particular id in the array at the index presented by
			// the variable i doesn't match the id from the element that was
			// clicked, then move on to the next. Once we've found the id in this
			// array that matches the id of the html element that was clicked, then
			// we remove that id from the list so we now have the id of the OTHER
			// element, whether it is the Attending or Declines button
			i = 0; // i already exists above, no need to declare again, just change its value
			while(i < arr_ids.length) {
				if(arr_ids[i] != thisID && arr_ids[i] !== ''){ // use !== when comparing to ''
					i++;
				} else {
					arr_ids.splice(i, 1);
				}
			}


			// now we'll just officially place the other ID into a variable.
			other_id = arr_ids[0];
			console.log(other_id);

			// just a test to make sure that the only id present in the array now is
			// id for the button that was NOT pressed -- the hidden input (that actually
			// contains the value of attending or declined does not HAVE an ID. 
			console.log("these are the ids in the id array: " + arr_ids);

			// placing the hidden input into a variable
			for(var i=0; i<arr.length; i++){
				if(arr[i].className === 'rsvp-input'){
					rsvp = arr[i];
				}
			}

			console.log("this is the hidden input " + rsvp);

			// now we get both buttons placed into variables according to their IDs
			var deactivate = document.getElementById(other_id);
			var activate = document.getElementById(thisID);
			console.log(deactivate, activate);

			// and now we change the hidden input's value to Attending or Declined depending on which button
			// was selected
			if(activate.className === "button attend" || activate.className === "button attend deactivate"){
				activate.className = "button attend activate";

				// then we use another script later to search if group exists, 
				// if it does exist, then is one of the items in the group 
				// required, if so then move ahead, if not then throw an error
				activate.setAttribute("required", ''); 
				deactivate.className = "button not-attend";

				// remove "required" attribute, so during the validation, if any buttons with
				// "required" still exist, we will circle them with red
				deactivate.removeAttribute("required");
				rsvp.value = "Attending";
			} else if(activate.className === "button not-attend" || activate.className === "button not-attend deactivate"){
				activate.className = "button not-attend activate";
				activate.setAttribute("required", '');
				deactivate.className = "button attend";
				deactivate.removeAttribute("required");
				rsvp.value = "Declined";
			}

			console.log(x.className);
			console.log(deactivate.className);
			console.log(rsvp.value);
		}


		////////////////////////////////////
		//// FORM VALIDATION /////
		////////////////////////////////////
		//// only exists to verify whether the form is valid. 
		//// the function, thisOne() (which happens when the form is clicked) will actually
		/// highlight the missing selections
		function validate(){
			var inputs = document.getElementsByTagName('input');
			var buttons = [];
			console.log(inputs);

			for(var i=0; i<inputs.length; i++){
				if(inputs[i].type == 'button'){
					console.log(inputs[i]);
					buttons.push(inputs[i]);
				}
			}

			console.log(buttons);

			var notActive = [];
			for(var i=0; i<buttons.length; i++){

				// check the value of the each button's "required" attribute.
				// if it doesn't EXIST, then it will be ''
				var req = buttons[i].getAttribute('required');

				// if activate doesn't exist as a class name and if req is false 
				// (it doesn't work with !req for some damn reason. )
				// then shoot the alert that the status of each group member must be assigned
				if(buttons[i].className.indexOf('activate') === -1 && req === ''){ 
					notActive.push(buttons[i]);
					console.log(notActive);
					alert("Please be sure to select the RSVP status for each member of your group!");
					return false;
				}
			}
		}


		/// highlight all buttons that have not been selected. 
		/// so long as the validation function keeps this form from being submmitted
		/// then this function will go to work. 
		function thisOne(){

			// get all the inputs on the page and assign to an array, "inputs"
			var inputs = document.getElementsByTagName('input');
			console.log(inputs);

			// declare an array, buttons to store all inputs of the 'button' type
			var buttons = [];

			// push all inputs of type 'button' into the button array
			for(var i=0; i<inputs.length; i++){
				if(inputs[i].type == 'button'){
					console.log(inputs[i]);
					buttons.push(inputs[i]);
				}
			}

			console.log(buttons);

			// declare an array to collect all those buttons that have not been selected
			// one way or the other. 
			var notSelected = [];

			for(var i=0; i < buttons.length; i++){
				var req = buttons[i].getAttribute('required'); 
				if(buttons[i].className.indexOf('activate') === -1 && req === ''){
					console.log(buttons[i]);
					notSelected.push(buttons[i]);
					console.log(notSelected);
				}
			}

			console.log(notSelected);

			// adds the status of "check" to the parentNode which is, in this case, 
			// the labels. So the labels will be highlighted in red
			for(var i=0; i < notSelected.length; i++){
				notSelected[i].parentNode.className += " check";
				console.log(notSelected[i]);
			}
		}


		function unCheck(x){

			var y = x.getElementsByTagName('label');

			console.log(y);
			
			for(var i=0; i<y.length; i++){
				/// will remove the class of "check" from the label once either of its
				/// child buttons are clicked. if the class of "check" doesn't exist, then it
				/// will do nothing
				y[i].classList.remove('check');
				console.log(y[i].classList);
			}

			console.log(x.childNodes);
		}