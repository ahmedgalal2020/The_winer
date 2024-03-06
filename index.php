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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" >

</head>
<body>
    <section>
        <div class="container">
        <form action="index.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Vorname</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" value="<?php echo $fname?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['fnameError']?>  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nachname</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="emailHelp" value="">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lnameError']?> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?> </div>
  </div>

  <button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
</form>



        <!--<form action="index.php" method="POST">
    <input type="text" name="fname" id="fname" placeholder="Vor name">
    <input type="text" name="lname" id="lname" placeholder="Nach name">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="submit" name="submit" value="send">
    </form>.-->


    <?php foreach ($users as $user): ?>
                                                                                                                                                                <h1> <?php echo htmlspecialchars($user['fname']) . ' ' . htmlspecialchars($user['lname']) . '<br> ' . htmlspecialchars($user['email']); ?></h1>

<?php endforeach ?>
        </div>
    </section>
   



<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>

</body>
</html>
