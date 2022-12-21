<?php
include("db.php");

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, email, password FROM tbl_user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header('Location:admin/dashboard.php');
    }else{
        header('Location:list.php');
    }
}
?>

<form method="post" action="">
    <label>Email</label>
    <input type="email" name="email" required />

    <label>Password</label>
    <input type="password" name="password" required />

    <input type="submit" name="submit" value="Login" />
</form>