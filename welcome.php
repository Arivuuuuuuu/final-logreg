


<?php
session_start();
$conn=mysqli_connect("localhost","root","","checking");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="./welcome.css">
</head>
<body>
    <div class="card">
        <?php
        
        if (isset($row["username"])) {
            echo "<h1>Welcome " . $row["username"] . "</h1>";
        } else {
            echo "<h1>Welcome User</h1>"; 
        }
        
        
        
        ?>
        <a href="logout.php">LOGOUT</a>
    </div>
</body>
</html>













