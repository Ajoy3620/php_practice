
<head>
    <title>Log in</title>
</head>
<body>
    <h2>Email</h2>
    <h2>Name</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody id="table-body">
        </tbody>
    </table>
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

    <h3>Add New Entry</h3>
    <form id="entry-form">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit">Add Entry</button>
    </form>

    <script>
        document.getElementById('entry-form').addEventListener('submit', function(event) {
            event.preventDefault(); 
            
            
            var email = document.getElementById('email').value;
            var name = document.getElementById('name').value;
            
            
            var newRow = document.createElement('tr');
            newRow.innerHTML = '<td>' + email + '</td><td>' + name + '</td>';
            
            
            document.getElementById('table-body').appendChild(newRow);
            
            
            document.getElementById('entry-form').reset();
        });
    </script>
    
</body>
</html>