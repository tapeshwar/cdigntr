<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>

   <script src="<?php echo base_url('assets/js/jquery-validation/lib/jquery.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery-validation/dist/jquery.validate.js')?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/js/login.js')?>"></script>
  <!-- plugins:css -->
 
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  

  
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png')?>" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?=base_url('assets/images/logo.svg')?>" alt="logo">
              </div>
             
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" id="user_login_form" data-url="<?=base_url('login/user_login')?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-md" name="username"  placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-md" name="password"  placeholder="Password" required>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary user_login_btn">SIGN IN</button>
                </div>
                </form>

                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="javascript:void(0)" data-url="<?=base_url('login/user_register')?>" class="text-primary user_register">Create</a>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>



  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</body>

</html>
