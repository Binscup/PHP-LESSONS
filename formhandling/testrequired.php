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
    //definisi name fungdi inputan
    $namaLengkap='';
    $kelas='';
    //definisi notofikasi    error jika kosong
    $namaLengkapEror='';
    $kelasEror='';

    function dataType($dataKelas)
    {
        $inputData = trim($dataKelas);
        $inputData = stripslashes($dataKelas);
        $inputData = htmlspecialchars($dataKelas);
        return $inputData;

    }
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (empty($_POST['namaLengkap'])) {
            $namaLengkapEror = 'Nama lengkap tidak boleh kosong!';
        }else{
            $namaLengkap = dataType($_POST['namaLengkap']);
        }
        if (empty($_POST['kelas'])) {
            $kelasEror = "Kelas tidak boleh kosong!";
        } else {
            $kelas = dataType($_POST['kelas']);
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
        <label for="username">namalengkap</label>
        <input type="text" id="username" name="namalengkap" placeholder="Masukan nama anda"/>
        <span style="color: red; font: size 12px;"></span><?php echo $namaLengkapEror; ?></span>
        </div>
        <div style="margin-bottom:3px;">
            <label for="kelas">kelas</label>
            <input type="number" name="kelas" id="kelas">
            <span style="color: red; font: size 10px;"><?php $kelasEror; ?></span>
        </div>

        <button type="submit">Simpan</button>
    </form>
        <?php
        echo "Nama saya adalah" . $namaLengkap;
        echo "<br>";
        echo "Kelas saya saat ini" . $kelas;
        ?>
        <br>
        <?php echo "Today is" . date(" d m y h:i:s"); ?>
        <?php include '.include.php'; ?>
        <?php include '../form/include.php'; ?>

        
</body>
</html>