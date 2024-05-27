<?php
include_once "connection.php";
if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "NAME: $name <br>";
    echo "EMAIL: $email <br>";

    $sql = "INSERT INTO `log in` (`Email`, `Name`) VALUES ('$email', '$name');";

    $exet = mysqli_query($conn, $sql);
    if($exet){
        echo "Value inserted!";
    }else{
        echo "insert failed";
    }
    
    // $conn->close();
}
?>
<html>
<head>
    
<title> LOG IN </title>
</head>
<body>
        
    <div id="container">
        <div id="box form-box">
            <header>Log In</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="field">
                    
                    <input type="submit" name="submit" value ="Show" required>
                </div>
            </form>
        </div>


<div>
    <table>
    <table style="width: 100px;%">
    <caption> Entry Information</caption>
        <tr>
        <th style="width:70%">id</th>
            <th> Name </th>
            <th> Email </th> 
        </tr>
        <style>
            {
                text-align: center;
            }
            </style>


<?php
// $conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `log in` limit 5" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td> <?php echo $row["id"]; ?> </td>
        <td> <?php echo $row["Name"]; ?> </td>
        <td> <?php echo $row["Email"]; ?> </td>
    </tr>
    
    <?php
    }
} else {
    echo "0 results";
}

// my sqli oop
$conn->close();
?>
      
<style>
 th, td {
  border:1px solid black;
  border-style: outset;
  border-color: #808000;
 
}
th,td {
    background-color: #ff6347;
}
</style>
</body>
</html>
<style>
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Popins' , sans-serif;
}
body{
    background-color: lightblue;

}
#container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
#box{
    background: antiquewhite;
    display: flex;
    flex-direction: column ;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0, 1),
                0 32px 64px -48px rgba(0,0,0,0,5);

}
#form-box{

    width: 450px;
    margin: 0px 10px;
}
 .form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #8b1414;
    margin-bottom: 10px;
}
.box.field{
    display: flex;
    flex-direction: column;
}
.box form-box .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #DB7093;
    outline: none;
}
.btn{
    height: 35px;
    background: rgba(76, 68, 182, 0.808);
    border: 0;
    border-radius: 5px;
    color: Coral;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.btn :hover{
    opacity: 0.82;
    color: Coral;

}
.submit{
    width: 100%;
    color: Coral;
}
.links{
    margin-bottom: 15px;
}
</style>


