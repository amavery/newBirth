<?php

    $to = "aavery@aggies.ncat.edu"; // change with your email
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    $message    = $_POST['message'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($to, $subject, $message, $headers)){
        echo "success";  
        exit();
    } 
    else{
        echo "failed";
        exit();
    }  
?>
