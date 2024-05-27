<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
 $x =5;
 $y = 6; 
 echo ($x+$y); 


 $x = 7; 
 var_dump($x); 

 $x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y;

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

$x = "Hello World!";
echo substr($x, -5, 3);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;
echo "$a <br> $b <br> $c <br> $d <br> $e <br> $f <br> $g <br>" ;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

echo "$a <br> $b <br> $c <br> $d <br> $e <br> $f <br> $g <br>" ;

$fruits = array("apple", "banana", "orange"); 

echo $fruits[1]; "<br>";
echo "</br>";

$person = array(
  "name" => "John Doe",
  "age" => 20, 
  "city" => "New York",
);

echo $person["age"] ; 
echo "</br>";
$a= 5;
$b= 6;
$c= 7;

if($a < $b and $a < $c)

  echo "Both are true";
  "</br>"

 

?>
</body>
</html>
