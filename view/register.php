<?php

if(!empty($_POST)) {
    include "../controller/dbmanager.php";

    $stmt = $conn->prepare("INSERT INTO user (username,password,type) VALUES (?, ?, ?) ");
    $stmt->execute([$_POST['username'], $_POST['password'], 1]);
    unset($stmt);
    unset($_POST);
    header("location: http://localhost/ImtiyazSchool/view/login.php");
}


?>
<h2>REGISTER : </h2>
<form action="" method="post">
    First name:<br>
    <input type="text" name="username" placeholder="username" required>
    <br>
    Last name:<br>
    <input type="password" name="password" placeholder="password" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

