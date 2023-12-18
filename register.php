<?php
include("connecction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body 
        {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        div {
            text-align: center;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form name="form" action="input.php" method="POST">
            <label >Matric</label>
            <input type="text" id="user" name="user"></br></br>
            <label >Name</label>
            <input type="text" id="name" name="name"></br></br>
            <label >Password</label>
            <input type="password" id="pass" name="pass"></br></br>
            <label >Role:</label>
            <select id="role" name="role">
                <option value="student">Student</option>
                <option value="lecturer">Lecturer</option>
            </select></br></br>

            <input type="submit" id="btn" value="Submit" name="submit"/>
        </form>
        
    </div>
</body>
</html>