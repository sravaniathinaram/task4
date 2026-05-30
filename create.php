<?php
include 'config.php';

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts(title, content)
            VALUES('$title', '$content')";

    if(mysqli_query($conn, $sql)) {
        echo "Post Added Successfully!";
    }
}
?>

<h2>Create New Post</h2>

<form method="POST">

    <input type="text" name="title" placeholder="Post Title" required>
    <br><br>

    <textarea name="content" placeholder="Post Content" required></textarea>
    <br><br>

    <button type="submit" name="submit">Add Post</button>

</form>