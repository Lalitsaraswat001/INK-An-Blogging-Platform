<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?></title>
    
    <link rel="stylesheet" href="home.css">

    <style>
        .blog-container {
            max-width: 800px;
            margin: auto;
            padding: 40px;
        }

        .blog-container h1 {
            margin-bottom: 20px;
        }

        .blog-container p {
            line-height: 1.8;
            color: #444;
        }
    </style>

</head>

<body>

    <header class="navbar">

        <div class="logo">Ink<span>.</span></div>

        <nav>

            <a href="home.html">Home</a>
            <a href="blogs.php">Blog</a>
            <a href="stories.html">Stories</a>
            <a href="about.html">About</a>

        </nav>

    </header>

    <div class="blog-container">

        <h1><?php echo $row['title']; ?></h1>

        <p><?php echo nl2br($row['content']); ?></p>

    </div>

</body>

</html>