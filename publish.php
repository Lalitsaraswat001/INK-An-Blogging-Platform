<?php

include "db.php";

$author = mysqli_real_escape_string($conn, $_POST['author']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);

$sql = "INSERT INTO posts (author,title,content) VALUES ('$author','$title','$content')";

mysqli_query($conn, $sql);

echo "<script>
alert('Blog Published Successfully');
window.location='blogs.php';
</script>";
