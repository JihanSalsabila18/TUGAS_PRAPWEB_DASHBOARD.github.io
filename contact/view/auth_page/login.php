
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                
                  
                  if ($email == "test@example.com" && $password == "password") {
                      echo "<p class='text-success'>Login successful!</p>";
                  } else {
                      echo "<p class='text-danger'>Invalid email or password.</p>";
                  }
              }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="enter your email here" required>
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your password here" required>
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Login">
            </form>
            <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="login.jpeg" alt="login image" class="login-img">
        </div>
      </div>
    </div>

