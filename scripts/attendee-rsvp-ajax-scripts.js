			function plusOneFix() {
				document.getElementById("attendee-search").addEventListener("click", function(event){
	  				event.preventDefault();
	  			});

	  			var client_full_name = document.getElementById("full-name-query").value;

				var xhr;
				if (window.XMLHttpRequest) { // Mozilla, Safari, ...
					xhr = new XMLHttpRequest();
				} else if (window.ActiveXObject) { // IE 8 and older
				    xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}

				var data = "full-name-query=" + client_full_name; ////// so 'first-name-query' is the name of the INDEX. mind= blown. That was annoying. I couldn't figure that out until I started mucking with everything. 
					// the "last-name-query=" (the INDEX) must be changed on client-search-server-PART-TWO at the top to identify the correct index point to bring the data into the POST variable. ya dig? 

			    xhr.open("POST", "../data/attendee-search-server.php", true); 
			    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");   

			    xhr.send(data);

				xhr.onreadystatechange = display_data;
				function display_data() {
					if (xhr.readyState == 4) {
			     		if (xhr.status == 200) {
			       //alert(xhr.responseText);	   
				  			document.getElementById("attendee-results-box").innerHTML = xhr.responseText;
			     	 	} else {
			       			 alert('There was a problem with the request.');
			      		}
			     	}
				}
			}