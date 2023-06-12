<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $comments = $_POST['contact-message'];

 
    // recipient email address
    $to = "jcardona@teamjjelectric.com";

    
    // Do something with the data, such as sending an email
    mail($to, "Message from $first_name ", $comments, $email, $tel);

    echo 'Form submitted successfully!';
}

?>