<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = '';
    $kelas    = '';

    if($_SERVER("REQUEST_METHOD")=== "POST" ){
        $username = dataType($_POST['username']);
        $kelas = dataType($_POST['kelas']);
    }
        function dataType($datakelas)
        {
            $inputData = trim($datakelas);
            $inputData = stripslashes($datakelas);
            $inputData = htmlspecialchars($datakelas);

            return $inputData;
        }
    ?>
</body>
</html>