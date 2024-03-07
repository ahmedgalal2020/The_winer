<?php
session_start();

if (!$conn) {
    echo 'Error: ' . mysqli_connect_error();
    exit(); // Stop script execution if connection fails
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];   
$email = $_POST['email'];


$errors =[
    'fnameError'=>'',
    'lnameError'=>'',
    'emailError'=>'',
    
];



// Process form submission
if (isset($_POST['submit'])) {

    //Validation first name
    if (empty($fname)) {
        $errors['fnameError']='Vorname ist leer';
    } 
    //Validation last name
    if (empty($lname)) {
        $errors['lnameError']='Nachname ist leer';
   
    } 
    //Validation email
    if (empty($email)) {

        $errors['emailError']='Email ist leer';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors['emailError']='Bitte shcreiben Ihre richtiga Email';
    } 
    
    //Validation no more Errors 
    if(!array_filter($errors)){
    // Assigning POST data to global variables
    $fname = mysqli_real_escape_string($conn,$_POST['fname'] );
    $lname = mysqli_real_escape_string($conn,$_POST['lname'] );
    $email = mysqli_real_escape_string($conn,$_POST['email'] );

    $sql = " INSERT INTO Users(fname, lname, email) 
    VALUES ('$fname', '$lname', '$email')";
     if (mysqli_query($conn, $sql)) {
        $_SESSION['Success'] = 'Der Name wurde erfolgreich hinzugefügt';
        header('Location: ' . $_SERVER['PHP_SELF']);
       
    } else {
        echo 'Failed: ' . mysqli_error($conn);
    }

    }
}