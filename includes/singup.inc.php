<?php

if (isset($_POST["regisztracio"])) {
    // Grabbing the data
   /* $veznev = $_POST["veznev"];
    $kernev = $_POST["kernev"];
    $felnev = $_POST["felnev"];
    $jelszo = $_POST["jelszo"];
    $jelszo2 = $_POST["jelszo2"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];*/
    
    $veznev = filter_input(INPUT_POST, "veznev", FILTER_SANITIZE_SPECIAL_CHARS);
    $kernev = filter_input(INPUT_POST, "kernev", FILTER_SANITIZE_SPECIAL_CHARS);
    $felnev = filter_input(INPUT_POST, "felnev", FILTER_SANITIZE_SPECIAL_CHARS);
    $jelszo = filter_input(INPUT_POST, "jelszo", FILTER_SANITIZE_SPECIAL_CHARS);
    $jelszo2 = filter_input(INPUT_POST, "jelszo2", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_EMAIL);

    //Instantiate SingupContr class
    include "../classes/Dbh.php";
    include "../classes/SingupModel.php";
    include "../classes/SingupControl.php";
    $signup = new SingupControl($veznev, $kernev, $felnev, $jelszo, $jelszo2, $email, $telephone);

    //Running error handlers and user singup
    $signup->signupUser();

    //Going to back to front page
    header("location: ../index.php?error=none");
}