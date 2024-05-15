<?php
include "flag6.php";
class funny
{
    public function pyflag()
    {
        global $flag;
        echo $flag;
    }
}

if (isset($_GET['tryhackme']) && is_string($_GET['tryhackme'])) {
    $a = unserialize($_GET['tryhackme']);
    $a();
} else {
    show_source(__FILE__);
}