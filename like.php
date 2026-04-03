<?php

include "db.php";

$id = $_POST['id'];

mysqli_query($conn, "UPDATE posts SET likes = likes + 1 WHERE id=$id");

header("Location: blogs.php");
