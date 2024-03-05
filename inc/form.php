<?php
if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
    exit(); // Stop script execution if connection fails
}



// Process form submission
if (isset($_POST['submit'])) {
    // Assigning POST data to global variables
    $fname = mysqli_real_escape_string($conn,$_POST['fname'] );
    $lname = mysqli_real_escape_string($conn,$_POST['lname'] );
    $email = mysqli_real_escape_string($conn,$_POST['email'] );

    $sql = " INSERT INTO Users(fname, lname, email) 
    VALUES ('$fname', '$lname', '$email')";

    if (empty($fname)) {
        echo 'Vorname ist leer';
    } elseif (empty($lname)) {
        echo 'Nachname ist leer';
    } elseif (empty($email)) {
        echo 'Email ist leer';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte shcreiben Ihre richtiga Email';
    } else {

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