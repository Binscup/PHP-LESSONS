<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hari ="selasa";
    switch ($hari) {
        case 'senin':
            echo "hari ini adalah senin";
            break;
        case 'selasa':
            echo "hari ini adalah selasa";
            break;

        case 'rabu';
            echo "hari ini adalah rabu";
            break;
            
         case 'Kamis';
            echo "hari ini adalah Kanis";
            break;

        case 'Jumat';
            echo "hari ini adalah Jumat";
            break;
         
        default:
            echo "Hari weekand jangan di ganggu";
            break;
    }
    ?>
</body>
</html>