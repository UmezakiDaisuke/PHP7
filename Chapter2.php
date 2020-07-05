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


?>
</body>