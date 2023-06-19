<?php
if (isset($_POST["bejelentkezes"])) {
    // Grabbing the data
    $felnev = filter_input(INPUT_POST, "felnev", FILTER_SANITIZE_SPECIAL_CHARS);
    $jelszo = filter_input(INPUT_POST, "jelszo", FILTER_SANITIZE_SPECIAL_CHARS);

    //Instantiate SingupContr class
    include "../classes/Dbh.php";
    include "../classes/LoginModel.php";
    include "../classes/LoginControl.php";
    $login = new LoginControl($felnev, $jelszo);

    //Running error handlers and user singup
    $login->loginUser();

    //Going to back to front page
    header("location: ../index.php?error=none");
}