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
    // back to null
    $namalengkap = "";
    $kelas    = '';
    //message error required
    $namalengkaperror = "";
    $kelaserror   = '';

    if($_SERVER ["REQUEST_METHOD"]=== "POST" ){
        if(empty($_POST['namalengkap'])){
            $namalengkaperror = "nama lengkap tidak boleh kosong ,harus diisikan";
        } else {
            $namalengkap = dataType($_POST['namalengkap']);
        } 
        if(empty($_POST['kelas'])){
            $kelaserror = "kelas tidak boleh kosong ,harus diisikan";
    } else {
        $kelaserror = dataType($_POST['kelaserror']);
    } 
        function dataType($datakelas)
        {
            $inputData = trim($datakelas);
            $inputData = stripslashes($datakelas);
            $inputData = htmlspecialchars($datakelas);
            return $inputData;
        }
    }
    ?>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div style="margin-bottom: 3px;">
        <label for="username">namalengkap</label>
        <input type="text" id="username" name="namalengkap" placeholder="Masukan nama anda"/>
        <span style="color: red; font: size 10px;"></span><?php $namalengkaperror; ?></span>
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