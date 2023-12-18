<?php
include("connecction.php");

if (isset($_GET['id']))
 {
    $matric = $_GET['id'];

    
    $sql = "SELECT * FROM users WHERE matric = '$matric'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1)
     {
        $row = mysqli_fetch_assoc($result);
        
        echo "<h2>Update User Information</h2>
              <form method='POST' action='update2.php'>
                  Matric: <input type='text' name='matric' value='{$row['matric']}' readonly><br>
                  Name: <input type='text' name='name' value='{$row['name']}'><br>
                  Password: <input type='text' name='password' value='{$row['password']}'><br>
                  Role: 
                  <select name='role'>
                      <option value='student' " . ($row['role'] == 'student' ? 'selected' : '') . ">Student</option>
                      <option value='lecturer' " . ($row['role'] == 'lecturer' ? 'selected' : '') . ">Lecturer</option>
                  </select><br>
                  <input type='submit' value='Update'>
                  <a href='users.php'>Cancel</a>
              </form>";
    } else 
    {
        echo "User not found";
    }
} else 
{
    echo "Matric parameter not set";
}

mysqli_close($conn);
?>
