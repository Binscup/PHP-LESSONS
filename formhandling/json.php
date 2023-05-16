    <?php
        //json encode
        $kelas = array(
            // 'key' => 'value'
            'x' => 'kelas x',
            'xi' => 'kelas xi',
            'xii' => 'kelas xii',
        );
        extract($kelas);
        echo ("$x");
        echo"<br>";
        foreach($kelas as $key => $val){
             echo "$key, $val";
        }
        echo "<br>";
        $kelasDecode = '{"x":1,"xii":2,"xii":3,}';
        $object = json_decode($kelasDecode);
        print $object->{'x'};
        ?>
