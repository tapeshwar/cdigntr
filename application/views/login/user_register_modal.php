<div class="modal fade" id="myModalHorizontal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><?= $heading ?></h4>
            </div>
            <div class="modal-body">
        <div class="row w-100 mx-0">
          <div class="col-lg-12 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form data-url="login/user_registration" class="pt-3" id="user_registration_form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-md" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-md" name="email" placeholder="Email" required>
                </div>
               
                <div class="form-group">
                  <input type="password" class="form-control form-control-md" name="password" placeholder="Password" required>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn_submit btn-primary" id="user_registration_btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?=base_url('login')?>" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>

        </div>
        </div>
    </div>
</div>  