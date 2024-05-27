
<html>
<head>
<title>Login</title>
    
</head>
<body>
<?php
session_start();
?>

</body>
</html>
    
        <table border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody id="table-body">
        <style>
        body {
            font-family: Times New Roman, Helvetica;
            background-color: #2F4F4F;
            margin: -20;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #D3D3D3;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .login-container h4 {
            text-align: center;
        }
        .login-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 3px;
            background-color: #FF3333;
            color: #fff;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #FF3333;
           
}
        
    </style>
        </tbody>
    </table>

    <br>
   
   
    <h3>Add New Entry</h3>
    <form id="entry-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Add Entry</button>
    </form>
        <div class="login-container">
<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="Show">
</form>
    
</body>
</html>