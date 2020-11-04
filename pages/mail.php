<?php 
/*
Template Name: Email
*/

$mail = $_GET["mail"];


if (isset($mail)) {
    // // To prevent XSS injection
    $mail = strip_tags($mail);
    // // To protect MySQL injection
    $mail = stripslashes($mail);
    // // trim function removes space before and after the strings
    $mail = trim($mail);

    header("Location: mailto:" . $mail . "@exos-recrutement.com?subject=Demande de reseignements offre Exos");
    
} else {
    header("Location: https://exos-recrutement.com");
}

?>


