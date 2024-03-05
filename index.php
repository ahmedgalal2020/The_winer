<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

echo "<h1>" . $fname . "<br>" . $lname . "<br>" . $email . "</h1> ";

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
    <input type="email" name="email" id="" placeholder="Email">
    <input type="submit" name="submit" value="send">
    </form>
</body>
</html>