<?php include 'inc/header.php'; ?>

<?php 
 
if(isset($_SESSION['auth'])) {
    header("location:index.php");
    die;
}

?>

<?php include 'inc/navbar.php'; ?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <?php 
                if(isset($_SESSION['errors'])):
                  foreach($_SESSION['errors'] as $error): ?>
                      <div class="alert alert-danger text-center">
                        <?= $error; ?>
                      </div>
                  <?php                  
                endforeach;             
               unset($_SESSION['errors']);
              endif;   
                ?>

                <form class="mx-1 mx-md-4" action="handlers/handleRegister.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Name</label>
                      <input type="text" id="form3Example1c" name="name" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" name="email" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" id="form3Example4c" name="password" class="form-control" />                      
                    </div>
                  </div>

                  <div class="d-flex mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-6 d-flex align-items-center order-1 order-lg-2">

                <img src="eraasoft-logo.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>