

        	function screenShift() {
        		var x = document.getElementById("top-screen");
        		if(x.className === "top") {
        			x.className += " moveDown";
        		} else if (x.className === "topCenter moveBackTop"){
                    x.className = "top moveDown";
                }
        	}

            /* // ============traded this one for moveBack() which seems a bit smoother and cooler
        	function screenReturn() {
        		var x = document.getElementById("left-screen");
        		var y = document.getElementById("right-screen");
        		if(x.className === "left moveRight" && y.className === "right moveLeft") {
        			x.className = "left";
        			y.className = "right";
        		}
        	}
            */


            function moveBack() {
                var x = document.getElementById("top-screen");
                if(x.className === "top moveDown") {
                    x.className = "topCenter moveBackTop"; // had to give it leftCenter and rightCenter so that the images would have something to transition from
                }
            }

            /// 2/25/2020 ---00 ========= this needs a function or two, internally to count down from the end of the array and then start up again 
            var number = 0;
            var count = 0;
            var arr = [ "We can't wait to see you!", "Awright! Let's do this!", "Glad to have you! :)", "We accept all major credit cards", 
                        "Don't eat all the cake...<br> there are cupcakes too!",
                        "Getyer RSVP on!", "Where's Bowski? Probably eating cake", "This will be the party of the century! The 18th century!", 
                        "Be sure to eat your cake in short, controlled bursts", "There. Will. Be. Cake!", 
                        "Game over, man, game over! ... We're all out of cake!", "RSVP, baby!", 
                        "I say we take off and eat the cake from orbit <br> It's the only way to be sure", "Get away from my cake, you B$*!h!",
                        "Maybe we build a fire, sit around it and eat some cake?", "It's very pretty Bishop, but where's the cake?", 
                        "Forget him, he's gone! ... to eat cake.", "What do you mean, THEY cut the cake?!", 
                        "Where's the godd$@*n cake? Oh, I see it.", "Guess she don't like the carrots either."];
            function counter() {
                var randNum = Math.floor(Math.random() * arr.length);
                count++;
                if(count >= 100){
                    count = 0;
                } else{
                    var x = document.getElementById("top-rsvp-screen-p").innerHTML = arr[randNum];
                    number++;
                }

            ///// 3/5/20 -- use the below for two halves of the drop screens. 
/*
            var number = 0;
            var count = 0;
            var arr = ["  Be cool", "come to our wedding!", "This is your chance", "to wear a tie around your head", "Acceptable attire", "is NOT a G-string", "  Try not to eat", "all the cake!  "];
            function counter() {
                count++;
                if(number >= arr.length -1){
                    number = 6;
                } else if(count % 7 == 0){
                    var x = document.getElementById("top-rsvp-screen-p").innerHTML = arr[number];
                    number++;
                }
*/
                /*
                if(count == 4){
                    var x = document.getElementById("left-rsvp-screen-p").innerHTML = "c'mon ... you";
                    var y = document.getElementById("right-rsvp-screen-p").innerHTML = "know you want to!";
                } else if (count == 7){
                    var x = document.getElementById("left-rsvp-screen-p").innerHTML = "Bienvenidos a nos";
                    var y = document.getElementById("right-rsvp-screen-p").innerHTML = "cumpleanos";
                }*/
            }
    

             /* 
            tutorial by: https://codepen.io/MarcelSchulz/full/lCvwq
            */

/* ======== PARALLAX if you revist
            jQuery(document).ready(function(){
              $(window).scroll(function(e){
                parallaxScroll();
                });
                 
                function parallaxScroll(){
                    var scrolled = $(window).scrollTop();
                    $('#parallax-bg-1').css('top',(0-(scrolled*.25))+'px');
                    $('#parallax-bg-2').css('top',(0-(scrolled*.4))+'px');
                    $('#parallax-bg-3').css('top',(0-(scrolled*.75))+'px');
                }
             
             }); 
*/
            // the following adds the responsive and active classes to our navigation bar. responsive makes it so that when the hamburger icon is clicked, he navigation is displayed. the menu is already moved below the logo and icon by the media queries in the CSS
            function navclick() {
                var x = document.getElementById("navbar-collapse-open");
                var y = document.getElementById("hamburger-icon");
                if (x.className === "navigation-container-toggle") {
                    x.className += " responsive";
                } else {
                    x.className = "navigation-container-toggle";
                }

                if (y.className === "hamburger-icon"){
                    y.className += " open";
                } else {
                    y.className = "hamburger-icon";
                }
            }  
           
           
            /* ///////////// originally designed to add and remove chevron onClick
            function chevron() {
                var x = document.getElementById("loans");
                if (x.className === "dropbtn nochevron") {
                    x.className += " chevron";
                } else {
                    x.className = "dropbtn nochevron";
                }
               
            }
            */

            function changeFooter(){
                x = window.location.href; // this one should work on nearly all browsers
                console.log(x);
                if(x === "http://localhost/jenndave/pages/rsvp.php" 
                    || x === "http://localhost/jenndave/pages/attendee-rsvp-page.php" 
                    || x === "http://localhost/jenndave/pages/attendee-rsvp-page-complete.php"
                    || x === "http://localhost/jenndave/index.php"
                    || x === "http://localhost/jenndave/pages/travel.php"){
                    y = document.getElementById("thisFooter");
                   // console.log("heya");
                   // console.log(y);
                    if(y.className === '' ){
                        y.className += 'footerChange';
                    }
                } else {
                    return true;
                }
            }

            function activateNav(){
                x = window.location.href;
                console.log(x);
                if(x === "http://localhost/jenndave/pages/our-story.php"){
                    y = document.getElementById("our-story");
                    if(y.className === '' ){
                        y.className += 'active';
                    }
                } else {
                    return true;
                }
            }
           
            function drop() {
                var x = document.getElementById("dropdown-content-1");
                console.log(x);
                if (x.className === "dropdown-content-1") {
                    x.className += " show";
                } else {
                    x.className = "dropdown-content-1";
                }
               
            }
           
            function drop2() {
                var x = document.getElementById("dropdown-content-2");
                if (x.className === "dropdown-content-2") {
                    x.className += " show";
                } else {
                    x.className = "dropdown-content-2";
                }
            }
           
            function dropActive() {
                var x = document.getElementById("dropdown-link-1");
                if (x.className === "dropbtn") {
                    x.className += " active downChevron";
                } else {
                    x.className = "dropbtn";
                }
            }
           
            function dropActive2() {
                var x = document.getElementById("dropdown-link-2");
                if (x.className === "dropbtn") {
                    x.className += " active downChevron";
                } else {
                    x.className = "dropbtn";
                }
            }
           
           
            // okay, this one I just barely understand. the jquery is selecting the document and listening for click events that occur within the document. The document, of course, is the highest level object in the entire site construction. The click is connected to a function (event) that runs immediately upon click. This funciton checks to see if the dropdown content (1 or 2) is currently SHOWing. and it checks to see if the event target was #dropdownLoans. If both of those are true, then it removes "show" from the class (closing the window) and removes active as well (removing the green highlight for the link)
           
            // also, I be removing the downChevron class to, you know, make the downChevron disappear once the dropdown menu is closed. n stuff
           
            $(document).on("click" , function(event) {
                if ( $("#dropdown-content-1").hasClass("show")  && ( !$(event.target).closest("#dropdownMaster1").length) ) {
                    $("#dropdown-content-1").removeClass("show");
                    $("#dropdown-link-1").removeClass("active");
                    $("#dropdown-link-1").removeClass("downChevron");
                    // $("#dropdown-content-2").removeClass("show");
                    // $("#dropdownMG").removeClass("active");
                }
               
                else if ( $("#dropdown-content-2").hasClass("show") && ( !$(event.target).closest("#dropdownMaster2").length) ) {
                    $("#dropdown-content-2").removeClass("show");
                    $("#dropdown-link-2").removeClass("active");
                    $("#dropdown-link-2").removeClass("downChevron");
                }
               
            });

            /// FOOTER FIX /////////////////////////!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/* // unnecessary as of 3/10/2019
            function positionFooter(obj){
                var obj = $('fegginFooter');
                console.log(obj.css("position"));
                if ($("rsvp-main-box").outerHeight(true) > $(window).height()) {
                    obj.css("position","absolute");
                    console.log("the deed is done");
                } else {
                    obj.css("position","absolute");
                    obj.css("bottom","0em");
                    console.log("nah, THIS deed is done");
                }
             }

*/
           //// --------------------------------------------- ////
           //// TIMER      ////
           //// --------------------------------------------- ////


            // Set the date we're counting down to
            var countDownDate = Math.floor( new Date("Oct 3, 2020 16:00:00").getTime());
            var date = new Date(countDownDate);
            var now = Math.floor(new Date().getTime());
            var dateTwo = new Date(now);
            console.log(countDownDate);
            console.log(date.toString());
            console.log(dateTwo.toString());

            var days = Math.floor(((((countDownDate - now) / 1000) / 60) / 60 ) /24);
            console.log(days);

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (86400000));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                  // Display the result in the element with id="demo"
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                  // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown-timer").innerHTML = "We're married!";
                }
            }, 1000);

        
           
