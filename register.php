<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hashed_password')";

if (mysqli_query($conn, $sql)) {

    echo "<script>
alert('Registration Successful! Please Login.');
window.location='index.html';
</script>";
} else {

    echo "<script>
alert('Email already exists or error occurred');
window.location='index.html';
</script>";
}
