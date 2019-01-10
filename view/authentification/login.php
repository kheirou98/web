<?php
$arr = null;
if(!empty($_POST)) {
    include "../../controller/dbmanager.php";

    $stmt = $conn->prepare("SELECT username,password,type FROM user WHERE username=? && password=? ");
    $stmt->execute([$_POST['username'], $_POST['password']]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr = $row;

    }
    ///var_export($arr);
    $stmt = null;

    if ($arr != null){
        session_start();
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['type'] = $arr['type'];
        header('location:http://localhost/ImtiyazSchool/view/template.php');
    }
}

?>
<h1>LOGIN</h1>
<form action="" method="post">
    First name:<br>
    <input type="text" name="username" placeholder="username">
    <br>
    Last name:<br>
    <input type="password" name="password" placeholder="password">
    <br><br>

    <input type="submit" value="Submit">
</form>



