<?php
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $territory = $_POST['territory'];

    $result = mysqli_query($db, "INSERT INTO people (name, email, territory) 
    VALUES ('$name', '$email', '$territory')");