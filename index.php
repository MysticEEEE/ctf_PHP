<?php
include "flag2.php"; 
class funny{
    function __wakeup(){
        global $flag;
        echo $flag;
    }
}
if (isset($_GET['tryhackme'])){
    $a = $_GET['tryhackme'];
    if(preg_match('/[oc]:\d+:/i', $a)){
        die("NONONO!");
    } else {
        unserialize($a);
    }
} else {
    show_source(__FILE__);
}

 ?>