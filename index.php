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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
