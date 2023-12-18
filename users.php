<?php
include("connecction.php");

if (isset($_POST['logout'])) 
{
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) 
{
    $matric = $_GET['id'];


    $sql = "DELETE FROM users WHERE matric = '$matric'";
    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        echo "User deleted successfully!";
    } else 
    {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else 
{
    echo "";
}

mysqli_close($conn);
?>

<?php
    include("connecction.php"); 

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        echo "<table border='1'>
                <tr>
                    <th>Matric</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr>
                    <td>{$row['matric']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['password']}</td>
                    <td>{$row['role']}</td>
                    <td>
                        <a href='update.php?id={$row['matric']}'>Update</a>
                        <a href='users.php?id={$row['matric']}' onclick='return confirmDelete()'>Delete</a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else 
    {
        echo "No records found";
    }

    mysqli_close($conn);

    echo "<form method='POST'>
            <input type='submit' name='logout' value='Logout'>
          </form>";

 
    echo "<script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this user?');
            }
          </script>";
?>
