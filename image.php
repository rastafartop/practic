<?php
session_start();
$users_id = $_SESSION["users_id"] ?? false;
$photo_id = intval($_GET["id"]);
require "vendor/autoload.php";
$db = new Photos\db();
$photo = $db->get_photo_by_id($photo_id);
$comments = $db->get_photo_comments($photo_id)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <title>Document</title>
</head>

<body>
    <?php include "header.php"; ?>
    
    <div id="image">
    
        <img src="<?= $photo["image"] ?>" alt="">
        <?php if ($users_id): ?>
        <h1><?= $photo["text"] ?></h1>
        <p><?= $photo["name"] ?></p>
        <div class="comments">
            <div class="form">
                <textarea id="text" rows="5"></textarea>
                <button id="add_comment">Add</button>
            </div>
            <h2>Comments:</h2>
            <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <p class="author"><?= $comment["name"] ?></p>
                    <p class="text"><?= $comment["text"] ?></p>
                    <p class="date"><?= $comment["post_date"] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php endif; ?>
    <script src="image.js"></script>
</body>

</html>