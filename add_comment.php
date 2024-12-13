<?php
session_start();
if (isset($_POST["photo_id"], $_POST["text"], $_SESSION["users_id"])) {
    require "vendor/autoload.php";
    $db = new Photos\db();
    $inserted_comment = $db->add_comment($_POST["photo_id"], $_SESSION["users_id"], $_POST["text"]);
    echo json_encode($inserted_comment);
}
