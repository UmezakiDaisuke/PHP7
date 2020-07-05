<head>
<title>hello PHP</title>
</head>

<body>
<?php

$price = 5;
$off = 0.35;

print ($price * (1- $off));
echo "<br>";
printf('Price : $%.2f', $price * (1 - $off));
echo "<br>";

$string = "  aaabbb  ";
print(strlen($string));
echo "<br>";

print(substr($string, 0, 5));
echo "<br>";

print(str_replace('aaa', 'AAA', $string));
echo "<br>";

print(trim($string));
echo "<br>";

print ucwords(strtolower('SATO ICHIRO'));
echo "<br>";

print strtoupper('sato ichiro');
echo "<br>";

$string = "abcdefghijk";
print substr($string, 2, 5);
echo "<br>";

print 1 * 8 . 3 * 4;
echo "<br>";
print (1 * 8) + 3 * 4;
echo "<br>";

// 2-9
print 'Hello' == 'Hello'; //等価演算子「==」で値が一致（true）なら1を返却
echo "<br>";
print 'Hello' == 'HELLO'; //「==」で値が不一致（false）なら何も返却しない
echo "<br>";
print strcasecmp('Hello', 'Hello'); //strcasecmp: 大小文字を区別せず比較し、一致していれば0を返却
echo "<br>";
print strcasecmp('Hello', 'HELLO'); //値が一致しているので0返却
echo "<br>";
print strcasecmp('Hello', 'H'); //
echo "<br>";

// 2-10 ヒアドキュメント
echo "Print string1 \"PHP\" <br>";

echo <<<_DATA_
Print string2 : "PHP" $string <br>
_DATA_;

echo "<br>";

// 2-11
$number = 0;

$number += 1;
$number += 2;
$number++;
$number--;
++$number;
--$number;


print 'number : ' . "$number"; 
echo "<br>";
print 'number : ' . $number;

?>
</body>