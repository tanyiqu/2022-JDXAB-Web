<?php
echo("ser.php: You find me!");
class ouo{
    private $ser_code = "ser";
    function __destruct(){
        if(!empty($this->ser_code)) {
            if($this->ser_code == "FLAG")
                echo ("flag{30815ff8-76c2-11ed-aec4-44af28a75237}");
            else
                die('Try Again!');
        }}
    function __wakeup(){
        $this->ser_code=null;
    }
}
$ser_code = $_COOKIE['SER'];
unserialize($ser_code);
?>

