<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './inc/db.php';

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
    exit(); // Stop script execution if connection fails
}

// Assigning POST data to global variables
$GLOBALS['fname'] = $_POST['fname'] ?? ''; // Using null coalescing operator to avoid undefined index notice
$GLOBALS['lname'] = $_POST['lname'] ?? ''; // Using null coalescing operator to avoid undefined index notice
$GLOBALS['email'] = $_POST['email'] ?? ''; // Using null coalescing operator to avoid undefined index notice

// Process form submission
if (isset($_POST['submit'])) {

    // Use global variables directly or access them through $GLOBALS array
    $sql = "INSERT INTO Users(fname, lname, email) VALUES ('".$GLOBALS['fname']."', '".$GLOBALS['lname']."', '".$GLOBALS['email']."')";

    if(empty($fname)){
        echo 'Vorname ist leer';
    }
    elseif(empty($lname)){
        echo 'Nachname ist leer';
    }
    elseif(empty($email)){
        echo 'Email ist leer';
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'Bitte shcreiben Ihre richtiga Email';
    } else{

        if (mysqli_query($conn, $sql)) {
            header('Location:index.php');
            echo 'Success';
        } else {
            echo 'Failed: ' . mysqli_error($conn);
        }
    }



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
