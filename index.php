<?php
include './inc/db.php';
include './inc/form.php';
include './inc/fetch.php';
include './inc/closedb.php';
?>
<?php include_once './parts/header.php'; ?>

<div class="position-relative text-center">
<div class="col-md-5 p-lg-5 mx-auto my-5">

        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
             <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Vorname</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" value="<?php echo $fname ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['fnameError'] ?>  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nachname</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="emailHelp" value="<?php echo $lname ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lnameError'] ?> </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?> </div>
  </div>

  <button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
</form>
        </div>
        </div>

    <!-- cards -->
    <div class="row">
      <button id='winner'>Der Gewinner</button>
    <?php foreach ($users as $user): ?>
       <div class="col-sm-6">
        <div class="card my-2 text-center">
        <div class="card-header">
        <?php echo htmlspecialchars($user['fname']) . ' ' . htmlspecialchars($user['lname'])?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <?php echo htmlspecialchars($user['email'])?></li>
  </ul>

</div>
</div>
        <?php endforeach ?>
        </div>
        
        
        <?php include_once './parts/footer.php'; ?>