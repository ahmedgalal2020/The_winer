<?php
session_start();
include './inc/db.php';
include './inc/form.php';
include './inc/fetch.php';
include './inc/closedb.php';
?>
<?php include_once './parts/header.php'; ?>

<div class="position-relative text-center">
<div class="col-md-5 p-lg-5 mx-auto my-5">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']?> </div>
  </div>

  <button type="submit" class="btn btn-primary" name="submit" value="send">Submit</button>
  <?php if(isset($_SESSION['Success'])): ?>
    <div id="successMessage" class="form-text success">hi</div>

    <?php endif; ?>
        </form>
        </div>
        </div>


        
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Der Gewinner
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Der Gewinner ist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php foreach ($users as $user): ?>
      <div class="modal-body display-3 text-center">
      <?php echo htmlspecialchars($user['fname']) . ' ' . htmlspecialchars($user['lname']) ?>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hinzufügen einer weiteren Person
        </button>
        <button id='winner' type="button" class="btn btn-primary">Der Gewinner</button>
      </div> -->
    </div>
  </div>
</div>


  <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hinzufügen einer weiteren Person
        </button>
        <button id='winner' type="button" class="btn btn-primary">Der Gewinner</button>
      </div> -->






    <!-- cards -->
    <div class="row">
      <button id='winner' type="button" class="btn btn-primary">Der Gewinner</button>
   
                       <div class="col-sm-6">
                        <div id='card'class="card my-2 text-center">
                        <div class="card-header">
                        <?php echo htmlspecialchars($user['fname']) . ' ' . htmlspecialchars($user['lname']) ?>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <?php echo htmlspecialchars($user['email']) ?></li>
                  </ul>

                </div>
                </div>
        <?php endforeach ?>
        </div>
        
        
        <?php include_once './parts/footer.php'; ?>