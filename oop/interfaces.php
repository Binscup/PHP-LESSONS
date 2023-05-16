<?php
    class Notification{
        const webdev= "belajar webdev php";
    }
interface Study
{
    public function personalStudy();
}
class school  implements Study
{
    public function personalStudy()
    {
        echo Notification::webDev;
    }
}
$school= new school();
$school->personalStudy();
 ?>