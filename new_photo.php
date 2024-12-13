<?php
if (isset($_POST["image"], $_POST["text"])) {
    require "vendor/autoload.php";
    $db = new \Photos\DB();
    session_start();
    $user_id = $_SESSION["users_id"]; 
    $db->new_photo($user_id, $_POST["image"], $_POST["text"]); 
    header("Location: index4.php");
}
?>
