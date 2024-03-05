<?php
// Database connection
$conn = mysqli_connect('localhost', 'u294421851_thewiner', 'Am13111991', 'u294421851_thewiner');

if(!$conn){
    echo 'Error' . mysqli_connect_error();
}

// Process form submission
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    // Sanitize output to prevent XSS
    echo "<h1>" . htmlspecialchars($fname) . "<br>" . htmlspecialchars($lname) . "<br>" . htmlspecialchars($email) . "</h1> ";
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
