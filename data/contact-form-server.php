<?php

//TEST
//echo "made it to the server";

// Define  constants
define( "RECIPIENT_NAME", "Jen and Dave" );
define( "RECIPIENT_EMAIL", "jenmonday@comcast.net" );
define( "EMAIL_SUBJECT", "Attendee Email" );

// trim unnecessary characters and assign form data to variable
$cf_name = trim(($_POST['cf-name']));
$cf_email = trim(($_POST['cf-email']));
//$cf_subject = trim(($_POST['cf-subject']));
$cf_message = trim(($_POST['cf-message']));

// remove and replace unnecessary characters
$cf_name = preg_replace("/[^.\-\' a-zA-Z0-9]/", "", $cf_name ); // any character that is NOT in the regex gets replaced
$cf_email = htmlspecialchars(preg_replace("/[^.\_@ a-zA-Z0-9]/", "", $cf_email ));
//REMOVE SUBJECT FOR NOW
//$cf_subject = htmlspecialchars(preg_replace("/[^.\-\' a-zA-Z0-9]/", "", $cf_subject));
$cf_message = preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $cf_message);

//TEST
//echo $cf_email;

// Define array
$cf_items = array($cf_name, $cf_email, /*$cf_subject,*/ $cf_message);

//TEST
//$msg = "this is the \n message to you that I send \n to you I send it";
//$msg = wordwrap($msg, 70);
//mail("dbcurtis81@gmail.com", "Test Test Test", $msg, "From: dbcurtis81@gmail.com"); // needs a "FROM" to be successful

// These headers are built to head to US
$headers = "From: Wedding Site <jen-n-dave@jen-n-dave.fun>\r\n";
$headers .= "Reply-To: <jen-n-dave@jen-n-dave.fun>\r\n";
$headers .= "X-Mailer: PHP/".phpversion()."\r\n";
$headers .= "X-Sender: Wedding Site <jen-n-dave@jen-n-dave.fun>\n";
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: <jen-n-dave@jen-n-dave.fun>\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\n";
// unnecessary but good to have on tap $headers .= "Cc: testsite < mail@testsite.com >\n"; 

//echo $headers;

// These headers are built to head to the person who contacted us
$headers2 = "From: Jen and Dave's Wedding Site <jen-n-dave@jen-n-dave.fun>\r\n";
$headers2 .= "Reply-To: <jen-n-dave@jen-n-dave.fun> \r\n";
$headers2 .= "X-Mailer: PHP/".phpversion()."\r\n";
$headers2 .= "X-Sender: Wedding Site <jen-n-dave@jen-n-dave.fun>\n";
$headers2 .= "X-Priority: 1\n"; // Urgent message!
$headers2 .= "Return-Path: <jen-n-dave@jen-n-dave.fun>\n"; // Return path for errors
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html; charset=UTF-8\n";

// define message so it makes sense when sent
$cf_full_message = $cf_name." says".$cf_message."<br>Contact them at:".$cf_email;
$cf_full_message_for_sender = "<!doctype html>
<html>
  <head>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>Jen and Dave's Contact Form Reply!</title>
    <style>
    /* -------------------------------------
        Pretty cool inliner available here: htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    /* ExternalClass is a fix for Outlook */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
      /*
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      */
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    </style>
  </head>
  <body class='' style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
    <table border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;'>
      <tr>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
        <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;'>
          <div class='content' style='box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;'>

            <!-- START CENTERED WHITE CONTAINER -->
            <span class='preheader' style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'>Thanks for sending Jen and Dave a message!</span>
            <table class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                  <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                    <tr>
                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Hi there,<strong>".$cf_name."</strong>!</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>We appreciate that you reached out to us, and we'll get back to you lickity split!</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>You'll find a copy of what you sent to us below.<br>If you'd like to say something different, feel free to reply directly to this email</p>
                        <!-- button is below -->
                        <!-- *************** -->
                        <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;'>
                          <tbody>
                            <tr>
                              <td align='left' style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;'>
                                <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                                  <tbody>
                                    <tr>
                                      <th style='font-family: sans-serif; font-size: 18px; font-weight: bold; vertical-align: top; border-radius: 5px; text-align: left; width: 20%'>Name:</th>
                                        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: left;'>".$cf_name."</td>
                                    </tr>
                                    <tr>
                                      <th style='font-family: sans-serif; font-size: 18px; font-weight: bold; vertical-align: top; border-radius: 5px; text-align: left;'>Email:</th>
                                        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: left;'>".$cf_email."</td>
                                    </tr>
                                    <!-- EJECT FOR NOW
                                      <tr> 
                                        <th style='font-family: sans-serif; font-size: 18px; font-weight: bold; vertical-align: top; border-radius: 5px; text-align: left;'>Subject:</th>
                                          <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: left;'>cf_subject</td>
                                      </tr>
                                    -->
                                    <tr>
                                      <th style='font-family: sans-serif; font-size: 18px; font-weight: bold; vertical-align: top; border-radius: 5px; text-align: left;'>Message:</th>
                                        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: left; padding-bottom: 20px'><code>".$cf_message."</code></td>
                                   </tr>
                                  </tbody>
                                </table>
                                <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                                  <tbody>
                                    <tr>
                                      <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>If you'd like to head back to the site, just click the button</p>
                                    </tr>
                                    <tr>
                                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center;'> <a href='http://www.jen-n-dave.fun' target='_blank' style='display: block; color: #ffffff; background-color: #751A99; border: solid 1px #751A99; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0 /*auto - to center */; padding: 12px 25px; text-transform: capitalize; border-color: #3498db; width: 30%'>Wedding Site!</a> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>If you did not send us an email, please let us know!</p>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>Thank you!</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class='footer' style='clear: both; Margin-top: 10px; text-align: center; width: 100%;'>
              <table border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                <tr>
                  <td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                    <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>Jen and Dave are geting married on 10/03/2020 at Baldoria on the Water in Lakewood!</span>
                    <br>Don't worry, you haven't subscribed to anything, so you won't receive random emails from us.
                    <br>
                    <br>If you'd <em>LIKE</em> to subscribe to our updates, just <a href='http://i.imgur.com/CScmqnj.gif' style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;'>click here</a>
                    <!-- 
                      <a href='http://i.imgur.com/CScmqnj.gif' style='text-decoration: underline; color: #999999; font-size: 12px; text-align: center;'>Unsubscribe</a>.
                    -->
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
"
;

//if (preg_match('/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/', $cf_email)) {


	$success = mail("jenmonday@comcast.net, dbcurtis81@gmail.com", "Wedding Website Email"/*.$cf_subject,*/, $cf_full_message, $headers);


		 if ( $success ) {
		 	$success2 = mail($cf_email, "From Jen and Dave's Wedding Website — Here is a copy of your message", $cf_full_message_for_sender, $headers2);
		 	echo"	<p>
		 				Thanks for the message! We'll get back to you shortly.
		 			</p>
		 			<br>
		 			<br>
		 		";
		 } elseif ( !$success ) {
		 	echo "<p>There was a problem sending your message. Please try again.</p><br><br>" ;
		 }
	//}
?>