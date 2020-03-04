# PHP注释扩展

## 一、PHP注释

```php+HTML
<?php
//*
if ($foo) {
  echo $bar;
}
/*/
if ($bar) {
  echo $foo;
}
// */
?>
vs
<?php
/*
if ($foo) {
  echo $bar;
}
/*/
if ($bar) {
  echo $foo;
}
// */
?>

```

变量引用法

```php+HTML
<?php $ver3 = TRUE; 
       $debug2 = FALSE;
?>

// 引用文件

<?php if ($ver3) {
           print("This code is included since we are testing version 3");
         }
?>

<?php if ($debug2) {
           print("This code is 'commented' out");
         }
?>
```



## 二、HTML注释

```php+HTML
<!-- comment
<?php echo 346 ?>
-->

```

![image-20200303111732743](D:\WAMP\apache\htdocs\php_documentation_examples\htmlComment)

## 三、注释注意点

```
<?php

/*

$f->setPattern('/^\d.*/');

*/
```

正则注释注意会报错，用#代替/**/

![image-20200303134644026](D:\WAMP\apache\htdocs\php_documentation_examples\regComment)

```
<?php
if(1==1)
{
    //?>
}
//报错
//preg_match('/^(?>c|b)at$/', 'cat', $matches);
?>

```

这样也会报错