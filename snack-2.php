<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name= $_GET["name"];
    $mail= $_GET["mail"];
    $age= $_GET["age"];

    if (
        strlen($name) > 3
        &&
        strpos($mail, ".") !== false
        &&
        strpos($mail, "@") !== false
        &&
        is_numeric($age)
    ) {
        echo "accesso consentito";
    } else {
        echo "accesso negato";
    }

    ?>
</body>
</html>