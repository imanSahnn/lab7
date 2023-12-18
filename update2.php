<?php
include("connecction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $sql = "UPDATE users SET name='$name', password='$password', role='$role' WHERE matric='$matric'";

    if (mysqli_query($conn, $sql)) 
    {
        header("Location: users.php");
        exit();
    } else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else 
{
    echo "Invalid request method";
}

mysqli_close($conn);
?>
