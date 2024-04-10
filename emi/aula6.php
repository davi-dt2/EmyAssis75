<?

$a = 5;
$b = 5.34;
$c = "hello";
$d = true;
$e = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

echo "<br>"
echo "Cast para Float"
echo "<br>"

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

echo "<br>"
echo "Cast para Float"
echo "<br>"

//

$a = 5;
$b = 5.34;
$c = "25Kilometers";
$d = "Kilometers25"
$e = "hello";
$f = true;
$g = NULL;

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

?>