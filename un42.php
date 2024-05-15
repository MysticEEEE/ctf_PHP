<?php
include "flag4.php"; 
ini_set('session.serialize_handler','php');
session_start();
class funny{
    public $a;
    function __destruct(){
        global $flag;
        echo $flag;
    }
}
show_source(__FILE__);


// flag{53ssi0n_4ns3r@lize_is_very_e@sy}