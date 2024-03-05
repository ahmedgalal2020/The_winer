<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$conn = mysqli_connect('localhost', 'u294421851_thewiner', 'Am13111991', 'u294421851_thewiner');

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
    exit(); // Stop script execution if connection fails
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


// Process form submission
if (isset($_POST['submit'])) {
 
    $sql = " INSERT INTO Users(fname, lname, email) 
    VALUES ('$fname', '$lname', '$email')";
    
    mysqli_query($conn, $sql);


    // Sanitize output to prevent XSS
    //echo "<h1>" . htmlspecialchars($fname) . "<br>" . htmlspecialchars($lname) . "<br>" . htmlspecialchars($email) . "</h1> ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <input type="text" name="fname" id="fname" placeholder="Vor name">
    <input type="text" name="lname" id="lname" placeholder="Nach name">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="submit" name="submit" value="send">
    </form>
</body>
</html>
