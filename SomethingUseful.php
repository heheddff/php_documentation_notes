<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo $_SERVER['HTTP_USER_AGENT'];
//phpinfo(INFO_VARIABLES); //获取环境变量$_SERVER、$_GET、$_POST、$_COOKIE
//phpinfo(INFO_GENERAL); //获取全局配置
//phpinfo(INFO_CREDITS);
//phpinfo(INFO_CONFIGURATION); //获取配置的值
//phpinfo(INFO_MODULES); //获取启用模块信息
//phpinfo(INFO_ENVIRONMENT); //获取环境变量信息
//phpinfo(INFO_LICENSE); //获取许可信息
//phpinfo(INFO_ALL); //获取以上全部信息
/* 快捷注释
if (true){
    echo mt_rand(1,999);
}

echo 123;
function c(){
    return 346;
}
?>
<!-- comment
<?php echo 346 ?>
-->
<?php

#/*/

#$f->setPattern('/^\d.*/');


?>
<?php
/*preg_match('/^(?>c|b)at$/', 'cat', $matches);
 * 
 */
?>
<?php

// Control
echo microtime(), "<br />"; // 0.25163600 1292450508
echo microtime(), "<br />"; // 0.25186000 1292450508

// Test
echo microtime(), "<br />"; // 0.25189700 1292450508
# TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST
# .. Above comment repeated 18809 times ..
echo microtime(), "<br />"; // 0.25192100 1292450508

?>