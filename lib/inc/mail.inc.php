<?php
         $to = "btarantino94@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message = "<h1>This is headline.</h1>";
         $message = $FName . ":" . $_POST["fname"];
         $message = $LName. ":" .$_POST["lname"];
         $message = $Email. ":" . $_POST["exif_thumbnail(filename)"];
         $message = $Name. ":" .$_POST["name"];
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $email = mail ($to,$subject,$message,$header);
         
         if( $email == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
