<?php
require("./config/db.php");

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];

    if (empty($title) && empty($description)) {
        $error_message = "los datos no pueden ir vacíos";
    }else{
        $query = "INSERT INTO blog (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($db, $query);
        $success_message = "los datos fueron registrados exitosamente";
    }
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Platform</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <h1>My Blog Platform</h1>
    </header>

    <div class="blog-container">
        <!-- Blog Post List -->
        <?php include("./includes/post.php") ?>
        <!-- New Post Form -->
        <form class="new-post-form" method="post" action="/proyectos_php/01-blog/index.php">
            <h2>Create New Post</h2>
            <input type="text" name="title" placeholder="Post Title">
            <textarea name="description" placeholder="Post Content" rows="5"></textarea>
            <button type="submit">Publish Post</button>

            <?php if ($error_message) { ?>
                <div class="alert">
                    <?php if (!empty($error_message)) echo $error_message ?>
                </div>
            <?php } ?>

            <?php if ($success_message) { ?>
                <div class="success">
                    <?php if (!empty($success_message)) echo $success_message ?>
                </div>
            <?php } ?>

        </form>
    </div>

    <script>
        const alert = document.querySelector(".alert");
        const success = document.querySelector(".success");

        if(alert) {
            setTimeout(() => {
                alert.remove()
            }, 3000);
        }else if(success) {
            setTimeout(() => {
                success.remove()
            }, 3000);
        }
    </script>

</body>
</html>