<?php

    echo "included the testFile!!";

    $path = './../';
    $filename = 'sampleAttachment.txt';
    $from_name = 'adam';
    $from_mail = 'adam.pasternack@gmail.com';
    $replyto = 'adam.pasternack@gmail.com';
    $message = 'sample message';
    $mailto = 'adam.pasternack@gmail.com';
    $subject = 'message with attachment';

    $file = $path.$filename;
    $content = file_get_contents( $file);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);

    // header
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

    // message & attachment
    $nmessage = "--".$uid."\r\n";
    $nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $nmessage .= $message."\r\n\r\n";
    $nmessage .= "--".$uid."\r\n";
    $nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
    $nmessage .= "Content-Transfer-Encoding: base64\r\n";
    $nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $nmessage .= $content."\r\n\r\n";
    $nmessage .= "--".$uid."--";

    if (mail($mailto, $subject, $nmessage, $header)) {
        return true; // Or do something here
    } else {
    return false;
    }

?>