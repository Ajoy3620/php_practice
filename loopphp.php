<?php
$grade = "B";

switch ($grade) {
  case "A":
    echo "Excellent!";
    break;
  case "B":
    echo "Good job!";
    break;
  case "C":
    echo "You can do better.";
 
  case "D":
    echo "You need to work harder.";
    break;
  default:
    echo "Invalid grade";
}
?>

