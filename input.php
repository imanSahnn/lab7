<?php
    include("connecction.php");
    
    if(isset($_POST['submit']))
    {
        $mat = $_POST['user'];
        $names = $_POST['name'];
        $password = $_POST['pass'];
        $role = $_POST['role'];

        $sql = "INSERT INTO users (matric, name, password, role) VALUES ('$mat', '$names', '$password', '$role')";
        
       
        $result = mysqli_query($conn, $sql);

        
        if($result)
        {
            header("Location: users.php");
        }
        else
        {
            echo '<script>
            alert("Registration failed. Please try again.");
            window.location.href = "register.php";
            </script>';
        }
    }
?>
