<html>
    <body>
        <?php
        /* $a= 13;
            if ( $a > 10){
                echo " Above 10";
                if ( $a > 20){
                    echo " and also above 20";
                }
                else{
                    echo "but not above 20";
                }
            }
            */
        
             $a = 13;

             if ($a > 10) {
               echo "Above 10 <br>";
               if ($a > 20) {
                 echo " and also above 20 <br>";
               } else {
                 echo " but not above 20 <br>";
               }
             }

             $b = 20;
             if($b < 100){
                echo " Not done <br>";
                if ( $b > 10){
                echo "This is the we need <br>";
            }
            else {
                echo "no need <br>";
            }
             }

// switch case
             $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br>";
    break;
  case "blue":
    echo "Your favorite color is blue!<br>";
    break;
  case "green":
    echo "Your favorite color is green!<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green! <br>";
}

$d = 4;

switch ($d) {
  case 2:
    echo "Today is Saturday <br>";
    break;
  case 2:
    echo "Today is Sunday <br>";
    break;
    default:
    echo "Looking forward to the Weekend <br>";
 
}
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long! <br>";
    break;
  case 6:
  case 0:
    echo "Weekends are the best! <br>";
    break;
  default:
    echo "Something went wrong <br>";
}

// while loop
$i = 1;
while ($i < 7) {
  echo "$i <br>";
  $i++;
}
//
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

//
$i = 1;
while ($i < 6){
  echo $i;
  $i++;
  
}
//
$i = 0;
while ($i < 100) {
  $i+=10;
  echo " $i <br>";
  
}
//

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
//

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
//

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6) ;
//for loop

for ($x = 2; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
// for loop
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}
// for loop
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}
// for loop
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

// for each loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $y) {
  echo "$y <br>";
}
// for each loop
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
//
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}

?>
        </body>
            </html>