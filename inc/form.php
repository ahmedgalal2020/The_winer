<?php
if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
    exit(); // Stop script execution if connection fails
}

// Assigning POST data to global variables
$GLOBALS['fname'] = $_POST['fname'] ?? ''; // Using null coalescing operator to avoid undefined index notice
$GLOBALS['lname'] = $_POST['lname'] ?? '';
$GLOBALS['email'] = $_POST['email'] ?? ''; 

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