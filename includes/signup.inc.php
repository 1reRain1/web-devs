<?php

if (isset($_POST["submit"])) {
    //getting the data from the form
    $student_id = $_POST["student_id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $description = $_POST["description"];

    //get the data from the user 

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($student_id, $username, $password, $email, $description);

    //running error handlers and user signup
    $signup->signupstudent();

    //going back to front page 
    header("location: ../login.php?error=none");

}