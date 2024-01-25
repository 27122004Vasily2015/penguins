<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penguins</title>
</head>

<body>

<form action="check.php" method="POST">
        <label for="userName">Введите имя:</label>
        <input type="text" id="userName" name="userName">
        <br>
        <label for="userAge">Введите возраст:</label>
        <input type="number" id="userAge" name="userAge">
        <br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    $userName = "Кристина";
    $Age = 19;
    echo "<b>Меня зовут $userName</b>";
    if ($Age >= 18) {
        echo "<a href='adult.php'>Перейди по ссылке</a>";
    } else {
        echo "<a href='child.php'>Перейди по ссылке</a>";
    }
    echo "<br>";
    $a = 1;
    while ($a <= $Age) {
        echo $a;
        $a++;
    }

    echo "<br>";

    $a = 1;
    do {
        if($a%2==0) 
        echo $a;
        $a++;
    } while ($a <= $Age);

    echo "<br>";

    for ($a = 1; $a <= $Age; $a++) {
        echo $a;
    }
    ?>
</body>
</html>