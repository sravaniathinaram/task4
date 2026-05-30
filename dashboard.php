while($row = mysqli_fetch_assoc($result)) {

    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['content']."</p>";

    echo "<a href='edit.php?id=".$row['id']."'>Edit</a> | ";

    echo "<a href='delete.php?id=".$row['id']."'>Delete</a>";

    echo "<hr>";
}