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
    for($awal = 1; $awal <= 10; $awal++){
        echo "nilai". $awal. "<br>";
    }
    ?>
    <br>
    <?php
    for($awal = 1;;$awal++){
        if($awal >10){
            break;

        }
        echo $awal;
    }
    ?>
<br>
</body>
</html>