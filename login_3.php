<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["Email"]) && isset($_POST["Name"])) {
        $userEmail = $_POST["Email"];
        $Name = $_POST["Name"];
        $valid_Email = "Email";
        $valid_Name = "Name";

        if ($username === $valid_Name && $userEmail === $valid_Email) {
            $_SESSION["Name"] = true;
            $_SESSION["Email"] = $username;
            header("location: Login.php");
            exit;
        } else {
        }
    }
}
            ?>
            <html>
                <body>
                <title>Login</title>
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
        .login-container input[type="text"],
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
</head>
<body>
    <div class="login-container">
        <h4>Login</h4>
        <form action="#" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="name" placeholder="Name" required>
            <input type="submit" value="Show">
        </form>
</div> 
<br>
<style>
        
        .option-container {
            background-color: #D3D3D3;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        
        }
        </style>
        </body>
</html>