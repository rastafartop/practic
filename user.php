<?php
session_start();
if (isset($_SESSION["users_id"])) {
    $users_id = $_SESSION["users_id"];
} else {
    $users_id = false;
}
if ($users_id) {
    require "vendor/autoload.php";
    $db = new Photos\db();
    $data = $db->get_user_photos($users_id);
}
if (isset($_GET["error"])) {
    $error = "Incorrect login or password";
};
if (isset($_GET["sign_error"])) {
    $sign_error = "This username is already occupied";
};
if (isset($_GET["sign_success"])) {
    $sign_success = "Congritulations";
};
if (isset($_GET["null_error"])) {
    $null_error = "null_error";
};




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="./media.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "header.php"
    ?>
    <?php if ($users_id): ?>
        <h1>User gallery</h1>
        <div id="grid">
            <?php foreach ($data as $photo): ?>
                <?php echo (new Photos\photo($photo["id"], $photo["image"], $photo["text"]))->get_html(); ?>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="form">
            <form action="./login.php" method="post">
                <h1>Autorization</h1>
                <input type="text" placeholder="Login" name="login">
                <input type="password" placeholder="Password" name="password">
                <button>Enter</button>
                <?php
                if (isset($_GET["error"])): ?>
                    <p class="error"><?= $error ?></p>
                <?php endif ?>
            </form>
        </div>
        <div class="form">
            <form action="./signup.php" method="post">
                <h1>Registration</h1>
                <input required type="text" placeholder="Login" name="login">
                <input required type="password" placeholder="Password" name="password">
                <button>Registration</button>
                <?php
                if (isset($_GET["sign_error"])): ?>
                    <p class="error"><?= $sign_error ?></p>
                <?php endif ?>
                <?php
                if (isset($_GET["sign_success"])): ?>
                    <p class="success"><?= $sign_success ?></p>
                <?php endif ?>
            </form>
        </div>
    <?php endif; ?>
    <?php
    include "add_form.php"

    ?>
    <script src="./script1.js"></script>
</body>

</html>