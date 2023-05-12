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
    $nilai = 70;
    if($nilai <= 90){
        echo "nilai anda terakredetasi A";
    } elseif($nilai <= 80){
        echo "nilai anda terakredetasi B";
    } elseif($niali <= 70){
        echo "nilai anda terakredetasi C";
    } elseif($nilai <= 60){
        echo "nilai anda terakreddetasi D";
    }else{
        echo "Semangat untuk remedialnya";
    }
    ?>
</body>
</html>