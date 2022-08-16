<?php

$servername = "localhost";

$username = "Rakib";

$password = "524531";

try {

    $con = new PDO("mysql:host=$servername;dbname=client_db", $username, $password);

    // set the PDO error mode to exception

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){

    $sql = $con->prepare("INSERT INTO client (first_name, last_name, email, user_name, password) VALUES (?,?,?,?,?)");

    $sql->bindParam(1, $_POST['fname']);

    $sql->bindParam(2, $_POST['lname']);

    $sql->bindParam(3, $_POST['email']);

    $sql->bindParam(4, $_POST['username']);

    $sql->bindParam(5, $_POST['password']);

    if($sql->execute()){

        echo json_encode("Inserted Successfully");

    }else{

        echo json_encode("Failed, Try Again");

    }

}

if(isset($_POST['username']) && isset($_POST['password'])){

    $sql = $con->prepare("SELECT * FROM client WHERE user_name=? AND password=?");

    $sql->bindParam(1, $_POST['username']);

    $sql->bindParam(2, $_POST['password']);

    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    if($sql->rowCount() != 0){

        echo json_encode("Welcom Blessing");

    }else{

        echo json_encode("Invalid Username or Password");

    }

}

