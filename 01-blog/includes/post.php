<?php
require("./config/db.php");

$getPost = "SELECT * FROM blog";
$posts = mysqli_query($db, $getPost);
?>

<?php while($row = mysqli_fetch_assoc($posts)) { ?>
    <div class="post">
    <h2><?php echo $row['title']; ?></h2>
    <p><?php echo $row['description']; ?></p>
    <p><?php echo $row['id']; ?></p>
    <div class="icons">
        <a href="/proyectos_php/01-blog/edit.php?id=<?php echo $row['id'] ?>" class="icon edit">✏️</a>
        <a href="/proyectos_php/01-blog/delete.php?id=<?php echo $row['id'] ?>" class="icon delete">🗑️</a>
    </div>
</div>
<?php } ?>