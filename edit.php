<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="title" value="<?php echo $row['title']; ?>">
    <textarea name="content"><?php echo $row['content']; ?></textarea>
    <button>Update</button>

</form>