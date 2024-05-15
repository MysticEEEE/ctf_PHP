<?php
// goto un42.php
ini_set('session.serialize_handler','php_serialize');
session_start();
if (isset($_GET['tryhackme'])){
$_SESSION['tryhackme'] = $_GET['tryhackme'];
} else {
show_source(__FILE__);
}


// flag{53ssi0n_4ns3r@lize_is_very_e@sy}