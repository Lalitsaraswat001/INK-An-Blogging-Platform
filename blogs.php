<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blogs</title>
    <link rel="stylesheet" href="home.css">

    <style>
        .blog-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
            padding: 40px;
        }

        .blog-card {
            background: white;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            padding: 20px;
        }

        .blog-card:hover {
            transform: translateY(-8px);
        }

        .blog-meta {
            font-size: 12px;
            color: gray;
            margin-bottom: 10px;
        }

        .like-btn {
            background: #ff5a2f;
            color: white;
            border: none;
            padding: 6px 10px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>

</head>
<body>

    <header class="navbar">

        <div class="logo">Ink<span>.</span></div>

        <nav>
            <a href="home.html">Home</a>
            <a href="blogs.php">Blog</a>
            <a href="write.html">Write</a>
            <button onclick="toggleDark()">🌙</button>
        </nav>

    </header>

    <section class="blog-grid">
        <?php

        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $preview = substr($row['content'], 0, 120);

        ?>

            <div class="blog-card">
                <h3><?php echo $row['title']; ?></h3>
                <div class="blog-meta">
                    By <?php echo $row['author']; ?> • <?php echo $row['created_at']; ?>
                </div>

                <p><?php echo $preview; ?>...</p>

                <a href="blog.php?id=<?php echo $row['id']; ?>">Read More</a>

                <br><br>

                <form action="like.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button class="like-btn">❤️ <?php echo $row['likes']; ?></button>
                </form>

                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

            </div>

        <?php } ?>

    </section>

    <script>
        function toggleDark() {

            document.body.classList.toggle("dark");

        }
    </script>

</body>
</html>