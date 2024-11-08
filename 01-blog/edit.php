<?php

require("./config/db.php");

$error_message = "";
$success_message = "";

$id = $_GET['id'];
$query = "SELECT * FROM blog WHERE id=$id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

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
        <form class="new-post-form" method="post" action="/proyectos_php/01-blog/update.php?id=<?php echo $row["id"]; ?>">
            <h2>Edit Post</h2>
            <input value="<?php echo $row['title'] ?>" type="text" name="title" placeholder="Post Title">
            <textarea name="description" placeholder="Post Content" rows="5"><?php echo $row['description'] ?></textarea>
            <button type="submit">Edit Post</button>

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
</body>

</html>