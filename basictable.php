<html>
<head>
    <body>
    <title>Output</title>
    <table>
    <table style="width:20%">
        <tr>
            <th> id </th>
            <th> Name </th>
            <th> Email </th> 
            <td>
                <?php
                 $sql = "SELECT * FROM `log in` id, Name, Email FROM student";
                 $result = $conn->query($sql);
                 
                 if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                     echo "id: " . $row["id"]. " - Name: " . $row["Name"]. " " . $row["Email"];
                   }
                 } else {
                   echo "0 results";
                 }
                 $conn->close();
                 ?>
                </td>
</body>
</html>
<style>
table, th, td {
  border:1px solid black;
}
</style>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>