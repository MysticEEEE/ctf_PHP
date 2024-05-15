<?php
include "flag5.php";
class funny{
    private $a;
    function __construct() {
        $this->a = "givemeflag";
    }
    function __destruct() {
        global $flag;
        if ($this->a === "givemeflag") {
            echo $flag;
        }
    }
}

if (isset($_GET['tryhackme']) && is_string($_GET['tryhackme'])){
$a = $_GET['tryhackme'];
for($i=0;$i<strlen($a);$i++)
{
    if (ord($a[$i]) < 32 || ord($a[$i]) > 126) {
        die("浣犲埌搴曡涓嶈鍟�");
    }
}
unserialize($a);
} else {
    show_source(__FILE__);
}


// flag{7h3_61n@ry_5tr1n9_5_i5_int3r3sting}