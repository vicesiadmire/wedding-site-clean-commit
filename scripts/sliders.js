//// ---------- ////
           //// SLIDE SHOW  Venue////
           //// ---------- ////

            var slideIndex = 1;
            showDivs(slideIndex); // displays first image onload
           // console.log("the first slide index print = " + slideIndex);


            // so, dig it, when I click the left button for instance
            // --> it immediately loads with -1 as the argument in plusdivs
            //--> slidIndex = 1, so 1 plus -1 = 0. so slide index is now zero
            function plusDivs(n) { /// onclick plusDivs(-1)
                slideIndex = slideIndex + n;
                //console.log("slide index = " + slideIndex);
               // console.log("n = " + n);
            }

            // then, since slideindex is less than one, slide index becomes the total
            // --> length of the number of slides and we subtract one as we go. moving
            // --> down the array of slides.
            function showDivs(n) { // onclick showDivs(slideIndex)
                var i;
                var x = document.getElementsByClassName("venue-images");
                //console.log(slideIndex);
                if (n > x.length) {
                    slideIndex = 1;
                } else if (n < 1) {
                    slideIndex = x.length;
                }

                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }

                x[slideIndex - 1].style.display = "flex";
                //console.log(slideIndex);
            }


            //// BEGIN SLIDESHOW TOP ////
            //// ////////////////////////////
            /////////// /////// ////////// 

            var imgIndex = 1;
            showImgs(imgIndex); // the function call that happens on load, in order to display the first image

            function plusImgs(n) { /// onclick plusDivs(-1)
                imgIndex = imgIndex + n;
                //console.log("slide index = " + imgIndex);
                //console.log("n = " + n);
            }

            // Thumbnail image controls
            function dotImgCtrl(n) {
              showImgs(imgIndex = n);
            }

            function showImgs(n) { // onclick showDivs(slideIndex)
                var i;
                var x = document.getElementsByClassName("slide-images");
                //console.log(imgIndex);
                var y = document.getElementsByClassName("img-dot");

                if (n > x.length) {
                    imgIndex = 1;
                } else if (n < 1) {
                    imgIndex = x.length;
                }

                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                    y[i].style.backgroundColor = "#CBCBCB";
                    y[i].className = "img-dot";
                }

                // subtracting one because the index starts at 0, bruh
                x[imgIndex - 1].style.display = "flex";
                y[imgIndex - 1].style.backgroundColor = "#7851A9";
                y[imgIndex - 1].classList.toggle("dot-outside");
                
                //console.log(imgIndex);
            }