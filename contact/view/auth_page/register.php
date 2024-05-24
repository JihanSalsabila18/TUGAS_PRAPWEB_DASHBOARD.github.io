
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Register</h1>
            <form action="register_process.php" method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="enter your email here" required>
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your password here" required>
              </div>
              <div class="form-group mb-4">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="enter your name here" required>
              </div>
              <input name="register" id="register" class="btn btn-block register-btn" type="submit" value="Register">
            </form>
            <!-- <a href="#!" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="data.jpeg" alt="register image" class="login-img">
        </div>
      </div>
    </div>