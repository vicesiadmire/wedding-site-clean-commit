
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Jen and Dave's Wedding Website — 10/03/2020, 4pm, at Baldoria on the Water in Lakewood Colorado — Main Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Jen and Dave are getting married on October 3rd, 2020! We hope you'll join us at Baldoria on the Water in Lakewood, CO for our wedding!">
        <meta name="author" content="Dave Curtis">
        <meta name="keywords" content="wedding, marriage, wedding website, marriage website, Baldoria on the Water, dave and jen, jen and dave, october third twenty twenty, denver colorado wedding, 10/03/2020, wedding information, Lakewood CO wedding">

<!--- Facebook meta tags ========================================================= -->
        <meta property="og:title" content="Jen and Dave's Wedding Website — 10/03/2020 at Baldoria on the Water in Lakewood, CO — Main Page">
        <meta property="og:image" content="">
        <meta property="og:description" content="Jen and Dave are getting married on October 3rd, 2020! We hope you'll join us at Baldoria on the Water in Lakewood, CO for our wedding!">
        <meta property="og:url" content="http://www.jen-n-dave.fun">

<!-- Style sheet ================================================================= --> 
        <link href="css/wedding.css" type="text/css" rel="stylesheet">

<!-- Favicons ==================================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/icon/favicon-128.png">

        <link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="128x128" href="images/icon/favicon-128.png">
        <link rel="icon" type="image/png" sizes="152x152" href="images/icon/favicon-152.png">
        <link rel="icon" type="image/png" sizes="167x167" href="images/icon/favicon-167.png">
        <link rel="icon" type="image/png" sizes="180x180" href="images/icon/favicon-180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="images/icon/favicon-192.png">
        <link rel="icon" type="image/png" sizes="196x196" href="images/icon/favicon-196.png">

        <link rel="icon" type="image/ico" href="images/icon/favicon.ico">

<!--- JQuery ===================================================================== -->            
        <script src="https://use.fontawesome.com/cd69e4d2b0.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Google Fonts ================================================================ -->
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    </head>
   
   
<!-- Begin Body =================================================== -->
    <body onload="activateNav()"> <!--not sure the original intent of this, but it doesn't exist below ======= -->
    <div id="full-content-wrapper">
        <div id="top-content">
            <nav>
                <div class="nav-container">
                    <div class="navbar-toggle-container">
                        <div class="hamburger-icon" aria-hidden="true" onclick="navclick();" id="hamburger-icon">
                              <span></span>
                              <span></span>
                              <span></span>
                        </div>
                    </div>
                    <div class="brand-container-toggle"><a class="navbar-brand" href="index.php">Jen <span>& </span>Dave</a></div>
                    <div class="navigation-container-toggle" id="navbar-collapse-open">
                        <ul class="navigation">
                            <li><a href="index.php#about-us-content-wrapper">Our Story</a></li>
                            <li><a href="pages/rsvp.php">RSVP</a></li>
                            <li><a href="http://www.zola.com/registry/jenanddaveoct3registry" id="registry-hamnav" target="_blank" title="Jen and Dave's registry on Zola">Registry</a></li>
                            <li><a href="index.php#the-schedule-article-wrapper">Schedule</a></li>
                            <li><a href="pages/song-request.php">Request a Song</a></li>
                            <li><a href="pages/photos.php">Wedding Photos</a></li>
                            <li><a href="pages/travel.php#directions-content-wrapper">Directions</a></li>
                            <li><a href="pages/travel.php#accomodations-content-wrapper">Accomodations</a></li>
                            <li><a href="pages/travel.php#things-to-do-content-wrapper">Things to Do</a></li>
                            <li><a href="pages/faqs.php" title="FAQ section">FAQs</a></li>
                            <li><a href="index.php#contact-form-section-wrapper">Contact</a></li>
                       </ul>
                    </div>
                    <div class="navigation-container">
                        <ul class="navigation" id="left-nav">
                            <li><a href="pages/rsvp.php" id="rsvp" title="Jen and Dave's Wedding RSVP page">RSVP</a></li>
                            <li><a href="https://www.zola.com/registry/jenanddaveoct3registry" id="registry" target="_blank" title="Jen and Dave's wedding registry on Zola">Registry</a></li>
                            <li class="dropdown" id="dropdownMaster1" onclick="drop(); dropActive()">
                               <a href="javascript:void(0)" class="dropbtn" id="dropdown-link-1" title="Wedding dropdown menu">Wedding</a>
                               <div id="dropdown-content-1" class="dropdown-content-1">
                                    <ul id="dd">
                                        <li><a class="a" href="#about-us-content-wrapper" id="our-story" class="" title="The origin story of Jen and Dave">Our Story</a></li>
                                        <li><a class="a" href="index.php#wedding-information-content-wrapper">Information</a></li>
                                        <li><a class="a" href="pages/song-request.php">Request a Song</a></li>
                                        <li><a class="a" href="pages/photos.php">Photo Gallery</a></li>

                                    </ul>
                                 </div>
                            </li>
                        </ul>
                    <div class="brand-container"><a class="navbar-brand" href="index.php">Jen <span>& </span>Dave</a></div>
                        <ul class="navigation" id="right-nav">
                            <li class="dropdown" id="dropdownMaster2" onclick="drop2(); dropActive2()">
                                <a href="javascript:void(0)" class="dropbtn" id="dropdown-link-2">Travel</a>
                                <div id="dropdown-content-2" class="dropdown-content-2">
                                    <ul>
                                        <li><a href="pages/travel.php#directions-content-wrapper">Directions</a></li>
                                        <li><a href="pages/travel.php#accomdations-content-wrapper">Accomodations</a></li>
                                        <li><a href="pages/travel.php#things-to-do-content-wrapper">Things to Do</a></li>
                                    </ul>
                                </div>
                                </li>
                                <li><a href="pages/faqs.php" id="faqs" title="Jen and Dave's super helpful wedding FAQs!">FAQs</a></li>
                            <li><a href="index.php#contact-form-section-wrapper" id="contact" title="Contact form for Jen and Dave. If you've got a question, we've got an answer!">Contact</a></li>
                       </ul>
                   </div>
                </div>
            </nav>
        </div>
        <!-- ======== END NAV ================================================= -->

        <div id="top-image-empty-wrapper">
            <div id="top-image">
                <img id="main-image" src="images/jen-and-dave-top-center-graphic-3.png" title="Main page header graphic" alt="Main page header graphic. Dave and Jen, Saturday October 3rd, at Baldoria on the Water">
                <div class="top" id="top-screen">
                    <div id="top-screen-p-div">
                        <p class="rsvp-screen-p" id="top-rsvp-screen-p"></p>
                        <hr class="rsvp-screen-line-1">
                        <hr class="rsvp-screen-line-2">
                    </div>
                </div> 

                <div class="rsvp-container">
                    <div class="rsvp-wedding-date-box">
                        <p class="rsvp-wedding-date">October 3rd, 2020 <span>at</span> 4:00<span>PM</span></p>
                        <a href="https://www.baldoriaevents.com" target="_blank"><p>Baldoria<br><span>on the</span><br>Water</p></a>
                    </div>
                    <div class="rsvp-button">
                        <a onmouseover="screenShift(); counter()" onmouseout="moveBack()" href="pages/rsvp.php">RSVP</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- this screen drops from the top, yo. contained inside the image wrapper  ========================
        ======= Inside the Full Content Wrapper-->



 <!--- top image wrapper final div -->
    <div class="full-section-wrapper">
        <section id="about-us-content-wrapper" class="section-wrapper" >
            <div id="content-interior-1" class="section-interior-wrapper">
                <div class="content-interior-header top-header">
                    <!-- removed
                    <div class="section-separator-image-left">
                        <img src="art/filigree-design-site-small-section-dividers-white.png" alt="fancy filigree">
                    </div> 
                    -->
                    <h4>- About Us -</h4>
                    <!-- removed
                    <div class="section-separator-image-right">
                        <img src="art/filigree-design-site-small-section-dividers-white.png" alt="fancy filigree">
                    </div>
                    -->
                </div>
                <article id="about-us-main" class="interior-article-wrapper move">
                    <div id="about-us-main-image-wrapper-outside">
                        <div id="about-us-main-image-wrapper" class="interior-image-wrapper">
                            <div class="exterior-image-slider-wrapper">
                                <button class="slide-button slide-move-left" onclick="plusImgs(-1); showImgs(imgIndex);">&#10094;</button>
                                <div id="our-photos-slider-wrapper" > 
                                    <img class="slide-images fade" src="images/LV-wheel-byJayCurtis.jpg" alt="Las Vegas Ferris Wheel" alt="Jen and Dave the High Roller ferris wheel in Vegas. Everyone was on this trip. Not pictured: Bud, Carolyn, Clay, Josh, Diane, Nabs, Alex, Jay, and Becky. By Jay Curtis.">  
                                    <img class="slide-images fade" src="images/davenjen-killing-lobster-byJayCurtis.jpg" alt="Jen and Dave in Maine killing a lobster til it's good n' dead. By Jay Curtis">
                                    <img class="slide-images fade" src="images/theKiss-byJayCurtis.jpg" alt="Jen kisses Dave outside Moe's BBQ South Broadway after a performance at the UMS. by Jay Curtis">
                                    <img class="slide-images fade" src="images/jen-with-shark-drink-in-FL-small-2.jpg" alt="Jen with shark attack drink at Florida restaurant.">
                                    <img class="slide-images fade" src="images/balloonFest-byJayCurtis.jpg" alt="Jen and Dave at the Colorado Balloon Classic in Colorado Springs. By Jay Curtis.">
                                    <img class="slide-images fade" src="images/dave-n-jen-at-kelsey-and-aarons-wedding-6.jpg" alt="Jen and Dave enjoying our friend's, Kelsey and Aaron, wedding">
                                    <img class="slide-images fade" src="images/dave-jen-wash-park-circa2014-400px.jpg" alt="Jen and Dave at Wash Park - circa 2014">
                                    <img class="slide-images fade" src="images/jen-dave-at-jens-house-moustachioed-400px.jpg" alt="Jen and Dave sport sweet moustaches at Jen's house">
                                    <img class="slide-images fade" src="images/jen-dave-in-maine-on-boat-400px.jpg" alt="Jen and Dave on a freaking boat! In Maine! Mmmmmmm 2015 I think!">
                                    <img class="slide-images fade" src="images/jen-dave-in-vegas-photo-by-nabs-400px.jpg" alt="Jen and Dave in Vegas. Dave is holding Jen, like a Baus">
                                    <img class="slide-images fade" src="images/jen-n-dave-hawaii-on-whale-watch-400px.jpg" alt="Jen and Dave in Hawaii, on the Whale Watch tour! Dave didn't get sick on this one!">
                                </div>
                                <button class="slide-button slide-move-right" onclick="plusImgs(1); showImgs(imgIndex);">&#10095;</button>
                            </div>
                        </div>
                        <div class="img-dots-div" style="text-align:center">
                            <!-- dotImgCtrl() selects the exact slide we want to display -->
                            <div class="top-row-img-btns">
                                <span class="img-dot" onclick="dotImgCtrl(1)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(2)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(3)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(4)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(5)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(6)"></span>
                            </div>
                            <div class="bottom-row-img-btns">
                                <span class="img-dot" onclick="dotImgCtrl(7)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(8)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(9)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(10)"></span>
                                <span class="img-dot" onclick="dotImgCtrl(11)"></span>
                            </div>
                        </div>
                    </div>
                    <!-- static image - no longer necessary
                        <div id="about-us-main-image-wrapper" class="interior-image-wrapper">
                            <div id="our-story-main-image" >
                                <img src="images/LV-wheel-byJayCurtis.jpg" alt="Las Vegas Ferris Wheel">        
                            </div>
                        </div>
                    -->
                    <h5 id="our-story-header">Our Story</h5>
                    <div id="about-us-main-text" class="section-article-text">
                        <p><span class="drop-cap">W</span>e've been together for a long time—almost seven years by our count—and we've known each other even longer than that.
                        <br>
                        <br>We met about 12 years ago when a mutual friend introduced us at one of Dave's shows, and then we saw each other on the rare occasion that we would attend the same event&#8212;mostly music-related. Fast forward several years and Jen again attends one of Dave's shows, but something was different this time. Maybe it was Dave's unforgettable performance as the lead singer of a band that has been hailed by some as, "definitely a band that plays music." Maybe it was the gentle aroma of stale beer and cigarette smoke in the air. Whatever it was, it was magic. Dave saw Jen from across the room while he was standing behind the merch booth, and thought, "Well heck, Jen's here! I'll go say hi." And after that, we got to talking, and then laughing, and then it didn't seem too much of a leap to start seeing each other outside of those music venues we used to frequent so often.  
                        <br>
                        <br>We've been through a lot over the last seven years. We've changed addresses three times. We've learned how to work around strange sleep patterns. We've dealt with roommates, renters, noisy neighbors, noisy bandmates, living inside a music studio, living without a music studio, career changes, funerals, weddings, chocolate molds stacked to the ceiling and modifying our lives to make sure we have the time to support and encourage each other in all that we do. Whether we would get married was never a question, it was just a matter of making it happen.
                        <br>
                        <br>We're excited to share the culmination of the last seven years with you, and we can't wait to see you there!</p>
                    </div>
                </article>
            </div>
        </section>
        <section id="wedding-information-content-wrapper" class="section-wrapper-inline-content" >
            <div id="content-interior-2" class="section-interior-wrapper-inline-content">
                <div class="content-interior-header">
                    <h4>- The Wedding -</h4>
                </div>
                <div id="section-content-interior-wrapper" class="section-content-interior-wrapper">
                    <article id="the-venue" class="interior-article-wrapper inline left-article short move">
                        <h5>- The Venue -</h5>
                        <div class="exterior-image-slider-wrapper">
                            
                            <div id="the-venue-main-image-wrapper" class="interior-image-slider-wrapper">
                                <button class="slide-button slide-move-left" onclick="plusDivs(-1); showDivs(slideIndex); slide()">&#10094;</button>
                                <div id="wedding-slider-wrapper" > 
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-bar-square.jpg" alt="Las Vegas Ferris Wheel">  
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-exterior-pedestal-square.jpg" alt="Baldoria: viewing the main ceremony area, including the columns and pedestal.">
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-interior-schmancyaf-square.jpg" alt="Baldoria: inside, viewing the main celebration area. Purple lights and one tree in the center">
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-interior-fireplace-square.jpg" alt="Baldoria: interior shot that frames the couch and fireplace in the picture.">
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-interior-left-square.jpg">
                                    <img class="venue-images fade" src="images/baldoria/square/baldoria-water-feature-ceremony-square.jpg">
                                </div>
                                <button class="slide-button slide-move-right" onclick="plusDivs(1); showDivs(slideIndex);">&#10095;</button>
                            </div>
                            
                        </div>
                        <div id="the-venue-main-text" class="inline-section-article-text">
                            <h6 class="interior-link"><a class="main-interior-link-centered" href="https://www.baldoriaevents.com/" target="_blank">Baldoria on the Water</a></h6>
                            <br>
                            <br>
                            <p>
                                <span class="drop-cap">B</span>aldoria on the Water was the first venue we visited. I could tell Jen was a big fan the moment we walked in the door, and I made a bet with myself that this would end up being THE venue, but there was still a long list of venues to stop by. We visited venues all over the state, and all of them were really very nice; but, just as I predicted, when it was all said and done, Baldoria was the only venue that had everything we needed to make our celebration special.
                                <br>
                                <br>It's a beautiful venue, run by some awesome people, and we're really excited to have our wedding here!
                            </p>
                            <p>
                                Scroll through some photos above, or visit their website to do get a better idea of what to expect from the venue.
                            </p>
                            <p class="interior-link">
                                <a href="https://www.baldoriaevents.com/" title="Baldoria's website" target="_blank">Click here for the venue's website.</a>
                            </p>
                            <p class="interior-link">
                                <a href="https://www.google.com/maps/place/Baldoria+on+the+Water/@39.7166489,-105.1355186,18z/data=!4m15!1m9!3m8!1s0x876b83f831e92915:0xd6b430653d446679!2sHome2+Suites+by+Hilton+Denver+West+-+Federal+Center,+CO!5m2!4m1!1i2!8m2!3d39.7164524!4d-105.1359916!3m4!1s0x876b83f88b3de0d3:0xe533873c0486cc66!8m2!3d39.7174904!4d-105.1345193?hl=en" title="Google Map of Baldoria" target="_blank">Click here for a Google map to the venue.</a>
                            </p>
                        </div>
                    </article>
                <div id ="the-schedule-article-wrapper"></div>

                    <article id="" class="interior-article-wrapper inline right-article move">
                        <h5>- The Schedule -</h5>
                        <div id="the-schedule-main-text" class="inline-section-article-text">
                            <ul>
                                <li>
                                    <p class="question">
                                        4:00pm-4:30pm
                                    </p>
                                    <p class="answer">
                                        The Ceremony, AKA The Main Event. We're going to make it quick and painless—unless the joining ceremony goes terribly awry. Also, we're starting at 4pm sharp, so if you're not there by 4pm, then you'll just have to watch it on YouTube.
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        4:30pm-6:00pm
                                    </p>
                                    <p class="answer">
                                        Cocktail hour (and a half!). It's an open bar, so don't be shy! But don't be sloppy either. We expect enough lubrication that everyone is on the dance floor in an hour, maybe even with ties around their heads, but not so much that you're grabbing the mic to tell that one story about Dave. You know the story I'm talking about. 
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        6:00pm-7:00pm
                                    </p>
                                    <p class="answer">
                                        Dinner will be at 6, and it's buffet-style. There will be two lines going around the buffet table, so there will be no need to throw elbows or pretend that you're the bride or groom. Everyone will get food, and it should be fast and efficient if the bride has anything to say about it. She'll be timing you, so it's a good idea to start practicing your buffet etiquette. 
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        7:00pm-7:30pm
                                    </p>
                                    <p class="answer">
                                        First dance, father-daughter dance, mother-son dance. Insert quip here. 
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        7:30pm
                                    </p>
                                    <p class="answer interior-link">
                                        Garter and bouquet toss. I'm not sure that we know any single people. Do we? Maybe a handful. Either everyone we know is already married or will be getting married soon. Maybe we'll just leave the boquet and garter in the center of the dance floor and let you guys fight it out for either one. <a href="https://www.youtube.com/watch?v=AphxyjrH4SE" target="
                                        _blank" title="Kirk v. Spock, from 'Amok Time'">Kirk v. Spock style.</a>
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        8:00pm
                                    </p>
                                    <p class="answer">
                                        Cake cutting and dessert. We'll have cake, cupcakes, and ice cream (of course) for dessert. 
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        8:15pm
                                    </p>
                                    <p class="answer">
                                        Party time! I hope your dancing shoes are on, because we're going to cut many a rug!  
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        9:30pm
                                    </p>
                                    <p class="answer">
                                        Late night snacking time! Take a break and have some popcorn (of course). Or snap up one of the remaining cupcakes. Or go ahead and visit the bar again—the hotel is really close, so stumbling there shouldn't be a problem!   
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        10:30pm
                                    </p>
                                    <p class="answer">
                                        It's the send off! I guess this means that we're leaving. Which is okay with us because 10pm is our bedtime anyway. We require that you continue dancing until you are told to leave. 
                                    </p>
                                </li>
                                <li>
                                    <p class="question">
                                        11:00pm
                                    </p>
                                    <p class="answer">
                                        That's it! Don't forget your jackets, and don't forget to snag a chunk of centerpiece for your very own!  
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section id="content-wrapper-3" class="section-wrapper">
            <div id="content-interior-3" class="section-interior-wrapper">
                <div class="content-interior-header">
                    <h4>- Important  Stuff -</h4>
                </div>
                <article id="important-info-main" class="interior-article-wrapper move">
                    <h5>- FAQs -</h5>
                    <div id="important-info-text" class="section-article-text">
                        <p class="info-main interior-link">
                            Whoa. You nearly made it to the bottom of the page! Your reward is a short list of some questions we bet you have right now. If you'd like a more complete list, please visit our <a href="/pages/faqs.php" title="Links to the full FAQ section" class="interior-link">FAQs.</a>
                        </p>
                        <hr>
                        <ul>
                            <li>
                                <p class="question">
                                    What time does the ceremony start?
                                </p>
                                <p class="answer">
                                    4pm sharp. We ain't kidding. If you're not there and in your seat by 4pm, then YOU'LL be the one to explain it to Jen. My job is just to show up and look pretty.
                                </p>
                                <p class="question">
                                    When do I need to RSVP?
                                </p>
                                <p class="answer">
                                    Please try to get your RSVP in by 9/3/2020! 
                                </p>
                                <p class="question">
                                    What lavish gifts do you require?
                                </p>
                                <p class="answer">
                                    We know many of you are coming from out of town, so just making the trip out here is a special treat for us! Plus, Jen and I have been together long enough to amass quite the collection of stuff AND things. If we don't already own it, then finding space for it would involve some serious renovation. 
                                    <br>
                                    <br>Still, if you'd like to spoil us a little, we would love help with our honeymoon expenses! <a href="https://www.zola.com/registry/jenanddaveoct3registry/edit" target="_blank" title="Jen and Dave's Registry on Zola">Click here</a> to help us get a French massage from a real French masseuse (or masseur, we aren't picky and we're woke AF!) What's a French massage? Well, if you have to ask, you can't afford it; and you know what, neither can we, so pull out the ol' credit card and start racking up the miles!
                                </p>
                            </li>
                            <li>
                                <p class="question">
                                    What is the dress code?
                                </p>
                                <p class="answer interior-link"> 
                                    Dressy casual. That basically means business-casual but cooler and classier; essentially, just wear what you would wear to attend a nice dinner party with friends. Whatever you wear, make sure it's a cut above your normal day-to-day attire, while still comfortable enough that you can imagine dancing the Macarena in it. Over. And over. And over. And over. And over. And over again.
                                    <br>
                                    <br>Guys, jeans are okay so long as they are clean and pressed. Shorts and t-shirts aren't. It might be "casual", but it isn't lazy-Sunday-binging-Netflix casual. Leave the sweatpants, the shorts, the bathrobe, the t-shirt, and the pajama-onesie at home. At the same time, there's no need for tuxes, tophats, or monocles; but DO wear a button-up shirt, or a nice polo, coupled with slacks, trousers, or nice jeans. Class it up with a sportcoat, or throw on a vest. And hey, even though you don't NEED to wear a tie, we ain't gonna tell you not to. 
                                    <br>
                                    <br>Ladies, no need to wear heels tonight, and no need to  wear something formal enough that you could walk straight from our wedding and into an episode of The Crown. Dresses are generally the order of the day, although you have some solid flexibility within this dress code. Check out the links below, for some better insight.
                                    <br>
                                    <br>Here are a few links to help you sort out the dress code:
                                    <br><a href="https://www.bustle.com/p/what-is-dressy-casual-heres-what-the-popular-wedding-dress-code-means-40130" target="_blank">Dressy Casual&#8212;from Bustle</a>
                                    <br><a href="https://www.cosmopolitan.com/style-beauty/fashion/a30474742/dressy-casual-dress-code-meaning/" target="_blank">Dressy Casual&#8212;from Cosmopolitan</a>
                                    <br><a href="https://www.lifesavvy.com/2435/dress-code-guide-what-does-dressy-casual-mean/" target="_blank">Dressy Casual&#8212;from LifeSavvy</a>
                                    <br><a href="https://www.ties.com/blog/dressy-casual-men" target="_blank">Dressy Casual (for the guys)&#8212;from Ties.com</a>
                                </p>
                            </li>
                            <li>
                                <p class="question">
                                    I'd like to wear something complementary to your colors. So, uh, what are they anyway?
                                </p>
                                <p class="answer">
                                    Our colors are royal purple, black, and red. I recently learned there are even different shades of black, so don't beat yourself against a wall trying to match those colors exactly, we like you fine the way you are. 
                                </p>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </section>
        <section id="contact-form-section-wrapper" class="section-wrapper">
            <div id="content-interior-4" class="section-interior-wrapper">
                <div class="content-interior-header">
                    <h4>- Resources -</h4>
                </div>
                <article id="contact-form-article" class="interior-article-wrapper move short thin">
                    <div id="contact-form-wrapper">
                        <div class="header-ribbon">
                            <h5>Contact Us!</h5>
                        </div>
                        <div class="ribbon-behind">
                        </div>
                            <!-- return sendEmail() to be sure it stops the user to fill out all
                            form fields before the data is actually sent via AJAX.
                            the jQuery preventdefault inside the contact-form-ajax-scripts.js does
                            the deed, so the HTML5 handles the bulk of validation and the JS just handles
                            the email validation-->
                        <form id="contact-form" onsubmit="return sendEmail();">
                            <div id="contact-form-interior">
                                <p>If you've got a question, we've got an answer. 
                                    <br>We'd love to hear from you, so don't hesitate to reach out!
                                </p>
                                <br>
                                
                                <div id="contact-form-interior-inside" class="cf-panel">
                                    <hr>
                                    <label>
                                        <h6>Name:</h6>
                                        <input type="text" minlength="3" maxlength="20" name="sender-name" id="cf-name" class="cf-entry"  required>
                                    </label>

                                    <label>
                                        <h6>Email address:</h6>
                                        <input type="email" minlength="10" maxlength="30" name="sender-email" id="cf-email" required>
                                    </label>
                                    <div class="error-box-input">
                                        <i class="fas fa-exclamation-triangle" id="error-box-email"></i>
                                    </div>
                                    <!-- EJECT for now
                                    <label>
                                        <h6>Subject:</h6>
                                        <input type="text" minlength="7" maxlength="30" name="sender-subject" id="cf-subject" required value="this is the subject">
                                    </label>
                                    -->
                                    
                                     <!-- let's make sure the text area always stays the right damn size. The wrapper will be sized and will scale appropriately left to right according to the viewport and then the  textarea will fill it 100% but will scale vertically however someone might like to do it-->
                                    <div id="cf-text-area-wrapper">
                                        <label>
                                            <h6>Message:</h6>
                                                <textarea minlength="7" maxlength="400" rows="5" cols="20" name="message" id="cf-message" placeholder="" required></textarea>
                                        </label>
                                    </div>
                                        <label for="number">
                                            <h6>Please answer the following question:</h6>
                                        </label>
                                            <p>What is three minus one?</p>
                                            <input type="number" maxlength="20" name="number" id="cf-number-answer"  required>
                                    

                                    <button class="bouncy" name="submit" id="cf-submit" >SUBMIT</button><!-- do not need: onclick="sendEmail()" 
                                    any longer the onclick event is handled by jquery -->
                                </div>
                                <div class="cf-accordion" onclick="expandCF(this);">
                                    <p id="cf-openclose-text">Open the Form</p>
                                    <span>
                                    </span>
                                    <span>
                                    </span>
                                    <span>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
                <!--
                <article id="follow-us-article" class="interior-article-wrapper move short thin">
                    <div id="follow-us-wrapper">
                        <div class="header-ribbon">
                            <h5>Follow Us!</h5>
                        </div>
                        <div class="ribbon-behind">
                        </div>
                -->
                            <!-- return sendEmail() to be sure it stops the user to fill out all
                            form fields before the data is actually sent via AJAX.
                            the jQuery preventdefault inside the contact-form-ajax-scripts.js does
                            the deed, so the HTML5 handles the bulk of validation and the JS just handles
                            the email validation-->
                        <!--
                        <div id="follow-us-form-interior">
                            <p>We've got a couple places you can follow the event on social media if you'd like!
                            </p>
                            <br>
                            <ul id="follow-us-sm-ul">
                                <li>
                                    <a href="https://www.facebook.com/events/284410816278368/" target="_blank" title="Jen and Dave's Wedding Event on Facebook"><img src="art/fb-logo-circular-jnd-100px.png"></a>
                                </li>
                                <li>
                                    <img src="art/instagram-logo-circular-jnd-100px.png">
                                </li>
                            </ul>
                            <div id="contact-form-interior-inside" class="cf-panel">
                            
                            </div>
                        </div>
                    </div>
                </article>
                -->
            </div>
        </section>
    </div> <!--= closing tag for full-section-wrapper -->
    <footer id="thisFooter" class="">
        <img src="art/filigree-2-for-wedding-site.png" id="footer-backer-filigree" alt="fancy filigree">
        <div id="footer-interior-wrapper">
            <div id="countdown-timer-wrapper">
                <div id="countdown-timer-title">
                    <p>The party begins in:</p>
                </div>
                <div id="blocker">
                </div>
                <div id="countdown-timer">
                    <div class="time-wrapper">
                        <div id="days">
                        </div>
                        <hr class="countdown-timer-wrapper-hr">
                        <p class="countdown-timer-label">DAYS</p>
                    </div>
                    <div class="time-wrapper">
                        <div id="hours">
                        </div>
                        <hr class="countdown-timer-wrapper-hr">
                        <p class="countdown-timer-label">HOURS</p>
                    </div>
                    <div class="time-wrapper">
                        <div id="minutes">
                        </div>
                        <hr class="countdown-timer-wrapper-hr">
                        <p class="countdown-timer-label">MINUTES</p>
                    </div>
                    <div class="time-wrapper">
                        <div id="seconds">
                        </div>
                        <hr class="countdown-timer-wrapper-hr">
                        <p class="countdown-timer-label">SECONDS</p>
                    </div>
                </div>
            </div>
            <hr>
            <div id="footer-sitemap">
                <!--
                    <div id="footer-sitemap-rsvp-section">
                        <ul>
                            <li>
                                <p>RSVP</p>
                            </li>
                        </ul>
                    </div>
                -->
                <div class="footer-sitemap-group">
                    <div id="footer-sitemap-wedding-section" class="footer-sitemap-divs">
                        <ul>
                            <h6>Wedding</h6>
                            <li>
                                <p class="footer-link"><a href="pages/rsvp.php">RSVP</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="index.php#about-us-content-wrapper">Our Story</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="index.php#the-schedule-article-wrapper">Wedding Schedule</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="index.php#wedding-information-content-wrapper">Venue</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="http://www.zola.com/registry/jenanddaveoct3registry" id="registry-hamnav" target="_blank" title="Jen and Dave's registry on Zola">Registry</a></p>
                            </li>
                            <li>
                                <p class="footer-link">Wedding Party</p>
                            </li>
                        </ul>
                    </div>
                    <div id="footer-sitemap-fun" class="footer-sitemap-divs">
                        <ul>
                            <h6>Fun</h6>
                            <li>
                                <p class="footer-link"><a href="pages/photos.php">Wedding Photos</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="pages/song-request.php">Request a Song</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-sitemap-group">
                    <div id="footer-sitemap-travel-section" class="footer-sitemap-divs">
                        <ul>
                            <h6>Travel</h6>
                            <li>
                                <p class="footer-link"><a href="pages/travel.php#directions-content-wrapper">Directions</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="pages/travel.php#accomodations-content-wrapper">Accomodations</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="pages/travel.php#things-to-do-content-wrapper">Things to Do</a></p>
                            </li>
                        </ul>
                    </div>
                    <!--
                        <div id="footer-sitemap-faqs-section" class="footer-sitemap-divs">
                            <ul>
                                <h6>FAQs</h6>
                            </ul>
                        </div>
                    -->
                    <div id="footer-sitemap-contact-us-section" class="footer-sitemap-divs">
                        <ul>
                            <h6>Information</h6>
                            <li>
                                <p class="footer-link"><a href="pages/faqs.php" title="FAQ section">FAQs</a></p>
                            </li>
                            <li>
                                <p class="footer-link"><a href="index.php#contact-form-section-wrapper">Contact</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </footer>
</div> <!-- end of full content wrapper  - with footer set to relative and bottom:0 should keep the footer at the very bottom of this div once all the content above it pushes it there -->

            <!-- =========== Script Testing ===================================
            -->
            <script type = "text/javascript" language = "javascript" src="scripts/page-scripts.js"></script>
            <!-- <script type = "text/javascript" language = "javascript" src="scripts/onload-scripts.js"></script> -->
            <script type = "text/javascript" language = "javascript" src="scripts/sliders.js"></script>
            <script type = "text/javascript" language = "javascript" src="scripts/contact-form-ajax-scripts.js"></script>
            <script type = "text/javascript" src = "scripts/jquery.visible.js">  </script>
            <script type = "text/javascript" language = "javascript">

                function expandCF(x){
                    x.classList.toggle("downChevron");
                    y = document.getElementById("cf-openclose-text");
                    var panel = x.previousElementSibling;
                    if (panel.style.maxHeight) { // if maxHeight is true ( if it has a positive value) then make it null (or zero)
                        panel.style.maxHeight = null;
                        y.innerHTML = "Open the form";
                        //panel.style.margin= "0";
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                        y.innerHTML = "Close the form";
                        //panel.style.margin = ".5em 0 1.5em 0";
                    } 
                }

                var win = $(window);

                var movingEls = $(".move");

                movingEls.each(function(i, el) {
                    var el = $(el);
                    if (el.visible(true)) {
                        el.addClass("already-visible"); 
                    } 
                });

                win.scroll(function(event) {
                    movingEls.each(function(i, el) {
                        var el = $(el);
                        if (el.visible(true)) {
                            el.addClass("come-in"); 
                        } 
                    });
                });
            </script>

            <!-- ................... finish Scrip testing ........................ -->
    </body>
</html>
