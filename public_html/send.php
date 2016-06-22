<?php
if (isset(filter_input(INPUT_POST, 'submit'))) {
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $message = filter_input(INPUT_POST, 'message');
    $from = 'MYNBBF Contact';
    $to = "aavery@aggies.ncat.edu"; // change with your email
    $subject = 'Message from MyNbbf.org';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";


    if (mail($to, $subject, $body, $from)) {
        alert("Email Sent!");
    } else {
        alert("Email not Sent!");
    }
}
?>
