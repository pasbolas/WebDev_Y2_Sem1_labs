<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $decision1 = ( 5 < 6) ? "<br>\n 5 is less than 6" : "5 is more than 6";
    echo $decision1;
    $a1 = TRUE;
    $decision2 = ($a1 == false) ? "<br>\na1 is false" : "<br>a1 is true";
    echo $decision2;
    $decision3 = ("123" == 123) ?  "<br>\ntext is converted to integers" : "text is treated differently";
    echo $decision3;
    ?>
</body>
</html>