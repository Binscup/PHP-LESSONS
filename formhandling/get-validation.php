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
    $namalengkap = "";
    $kelas    = '';

    if($_SERVER ["REQUEST_METHOD"]=== "POST" ){
        $namalengkap = dataType($_POST['namalengkap']);
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
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div style="margin-bottom: 3px;">
        <label for="username">namalengkap</label>
        <input type="text" id="username" name="namalengkap" placeholder="Masukan nama anda"/>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">Kelas</label>
        <input type="number" id="username" name="kelas" placeholder="Masukan kelas anda"/>
    </div>
    <input type="submit" value="Simpan">
    </form>

    <?php
    echo "<br>";
    echo "nama lengkap saya " . $namalengkap;
    echo "<br>";
    echo "kelas saya ". $kelas;

    ?>
</body>
</html>