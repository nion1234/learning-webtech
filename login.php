<?php

if(isset($_POST['submit']))
{

    $usernameToCheck = $_POST["username"];

    $userlist = file ('users.txt');
    $success = false;

    foreach ($userlist as $user) {
        $user_details = explode('|', $user);
        if ($user_details[0] == $usernameToCheck) {
            die("This user is already exsists");
        }
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];

    if(empty($username) || empty($password) || empty($password2) || empty($email)){

        die("You filled out the form wrongly! Don't let anything empty next time!");

    }else if($password !== $password2){

        die("Passwords doesnt match!");

    }else{


        $fp = fopen('users.txt', 'a');
        $line = $username."|".$password."|".$email.PHP_EOL;
        fwrite($fp, $line);

        fclose($fp);

    }
}
?>
<a href="home.html">Home</a>