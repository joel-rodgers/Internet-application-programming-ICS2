<?php
    include_once './db.php';
    include_once './user.php';
    $full_name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $password=$_POST['password'];

    $con= new DBConnector();
    $pdo= $con->connectToDB();
    
    //TO REGISTER

    $user= new User();

    //SETTING MEMBER VARIABLES
    $user->setFullName($full_name);
    $user->setEmail($email);
    $user->setCity($city);
    $user->setPassword($password);

    $user->register($pdo);

    ?>