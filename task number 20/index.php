<?php
$name = "Petya";
$Surname = "Petrov";
$age = 20;
$salary = 11000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<p>Меня зовут $name $Surname, мне $age лет, я получаю " . ($salary * 12) . " в год</p>";
    ?>

    <p>Меня зовут <?php echo $name . " " . $Surname; ?>, мне <?php echo $age; ?> лет, я получаю <?php echo $salary * 12; ?> в год</p>

    <p>Меня зовут <?= $name ?> <?= $Surname ?>, мне <?= $age ?> лет, я получаю <?= $salary * 12 ?> в год</p>
</body>
</html>
