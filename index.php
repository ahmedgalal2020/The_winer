<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './inc/db.php';
include './inc/form.php';
include './inc/fetch.php';
include './inc/closedb.php';

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

<?php foreach($users as $user): ?>
    <h1> <?php echo htmlspecialchars($user['fname']) .' '. htmlspecialchars($user['lname']).'<br> '. htmlspecialchars($user['email']);?></h1>

<?php endforeach ?>


</body>
</html>
