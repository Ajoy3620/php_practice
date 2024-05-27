<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h4>Login</h4>
    <form action="welcome.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <button type="submit">Show</button>
    </form>
</body>
</html>

<style>
 body {
    font-family: sans-serif; 
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px auto;
    width: 200px;
}

label {
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

</style>