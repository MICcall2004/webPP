<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 기본</title>
</head>
<body>
    <h1> <?php echo "기본배우기"; ?> </h1>
    <?php 
        $name = "안영진";
        echo "$name";
        echo "님 어서오세요.";
        echo '<br/>';

        $name = "안영진";
        echo '$name 님 어서오세요.';
        echo "<br/>";
    ?>
    <h2> <?php echo $name; ?> </h2>
    <h2> <?=$name; ?> </h2>

<?php
    $num1="010";
    $num2="1234";
    $num3="5678";

    echo $num1."-".$num2."-".$num3;
?>

</body>
</html>