<div class="auth-box-right">
    <div class="card">
        <div class="card-body">
            <form action="#">
                <h4 class="text-primary mb-4">Log in !</h4>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email here" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Enter Password here" required>
                </div>
                <div class="form-row mb-3">
                    <div class="col-sm-6">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="rememberme">
                          <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="forgot-psw">
                        <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                      </div>
                    </div>
                </div>
              <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in Now</button>
            </form>
            <p class="mb-0 mt-3">Don't have a account? <a href="{{ route('register') }}">Sign up</a></p>
        </div>
    </div>
</div>
