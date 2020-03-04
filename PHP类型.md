# 类型

## 标量类型（Scalar Types）

boolean

integer

float

string

## 复合类型（Compound Types)

array

object

callable

iterable

## 特殊类型（Special Types）

resoure

NULL

## 伪类型（Pseudo-Types）

mixed

number

callback(同callable)

array|object

void

## 伪变量

`$...`.

## 类型应用函数

1. var_dump()
2. gettype()
3. cast--自动转换
4. settype()
5. is_types
   - is_int()
   - is_bool()
   - is_string()
   - is_float()
   - is_object()
   - is_array()

## 例

```php+HTML
<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
```

## 参考资料

[类型比较表]: https://www.php.net/manual/en/types.comparisons.php

