<?php

require("./config/db.php");

$id = $_GET['id'];
$query = "DELETE FROM blog WHERE id=$id";
$result = mysqli_query($db, $query);
header("location: /proyectos_php/01-blog/index.php");