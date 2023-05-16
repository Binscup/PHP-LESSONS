<?php
class OOP
{
    public function publicMethod(){
        echo "ini adalah OOP metode publik";
    }
    protected function protectedMethod(){
        echo "ini adalah OOP metode protected";

    }
    private function privateMethod()
    {
        echo "ini adalah OOP metode private";
    }    
    public function AccesMethodeOOP(){
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
        echo "<br>";

    }
}
$oop = new OOP();
$oop->publicMethod();
echo "<br>";
$oop->AccesMethodeOOP();
?>