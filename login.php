<?php

include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        header("Location: home.html");
        exit();
    } else {

        echo "<script>alert('Wrong Password'); window.location='index.html';</script>";
    }
} else {

    echo "<script>alert('User Not Found'); window.location='index.html';</script>";
}
