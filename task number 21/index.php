<?php
$data = [
    [
        "path" => "https://picsum.photos/seed/1/1920/1080",
        "title" => "Мост"
    ],
    [
        "path" => "https://picsum.photos/seed/2/1920/1080",
        "title" => "Комп"
    ],
    [
        "path" => "https://picsum.photos/seed/3/1920/1080",
        "title" => "Водопад"
    ],
    [
        "path" => "https://picsum.photos/seed/4/1920/1080",
        "title" => "Клубника"
    ],
    [
        "path" => "",
        "title" => "Тест"
    ],
    [
        "path" => "https://picsum.photos/seed/5/1920/1080",
        "title" => ""
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic</title>
    <style>
        img {
            max-width: 500px;
            display: block;
            margin: 20px auto;
        }
        p {
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <?php
    foreach ($data as $str) {
        if (!empty($str["path"]) && !empty($str["title"])) {
            echo "<img src='" . htmlspecialchars($str["path"]) . "' alt='" . htmlspecialchars($str["title"]) . "' />";
            echo "<p>" . htmlspecialchars($str["title"]) . "</p>";
        }
    }
    ?>

    <?php foreach ($data as $str): ?>
        <?php if (!empty($str["path"]) && !empty($str["title"])): ?>
            <img src="<?= htmlspecialchars($str["path"]) ?>" alt="<?= htmlspecialchars($str["title"]) ?>" />
            <p><?= htmlspecialchars($str["title"]) ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>