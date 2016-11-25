<?php

    echo "included the testFile!!";

    // the message
    $msg = "You just recieved and automated email from the internal sales calculator of Jump Goat Media!!";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("adam.pasternack@gmail.com","My subject",$msg);
    mail("markpasternack@gmail.com","My subject",$msg);


    // $email_from = 'costCalculator@jumpgoatmedia.com';
 
    // $email_subject = "New Cost Estimate Calculated";
 
    // $email_body = "You have received a new message from the user";// $name.\n".
    //                         //"Here is the message:\n $message".
    // $to = "yourname@yourwebsite.com";

    // $headers = "From: $email_from \r\n";

    // $headers .= "Reply-To: $visitor_email \r\n";

    // mail($to,$email_subject,$email_body,$headers);


?>