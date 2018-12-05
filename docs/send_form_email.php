<?php

	  $name = $_POST['name'];

	  $visitor_email = $_POST['email'];

	  $message = $_POST['message'];



	    $email_from = 'oscar@flingodesign.de';



	    $email_subject = "New Form submission";



	    $email_body = "You have received a new message from the user $name.\n".

	                            "Here is the message:\n $message".




                              	  $to = "oscar@flingodesign.de";



                              	  $headers = "From: $email_from \r\n";



                              	  $headers .= "Reply-To: $visitor_email \r\n";



                              	  mail($to,$email_subject,$email_body,$headers);




	?>
