<?php

require("./config/db.php");
$title = $_POST['title'];
$description = $_POST['description'];

$id = $_GET['id'];
$query = "UPDATE blog SET title='$title', description='$description' WHERE id=$id";
$result = mysqli_query($db, $query);
header("location: /proyectos_php/01-blog/index.php");