<?php
    class staticMethod
    {
        public function staticFunc(){
            echo"ini adalah static function method";
        }
    }
    staticMethod::staticFunc();
    echo"<br>";

    class staticMethod2
    {
        public static $oop = "ini adalah metode statik metode versi 2";
        public static function staticFunc2()
        {
            echo self::$oop;
        }
    }
    staticMethod2::staticFunc2();
?>  