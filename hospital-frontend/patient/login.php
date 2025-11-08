<?php $pageTitle = 'Patient Login — HospitalCare+'; include '../header.php'; ?>

<main class="container" role="main">
  <section class="card" aria-labelledby="loginHeading">
    <h1 id="loginHeading">Patient Login</h1>
    <p class="lead">Access your appointments, medical records and prescriptions.</p>

    <form id="loginForm" method="post" novalidate>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Enter your email" autocomplete="email" required>
        <div id="emailErr" style="color:#c00;font-size:13px;display:none;margin-top:6px">Please enter a valid email.</div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div style="display:flex;gap:8px;">
          <input id="password" name="password" type="password" placeholder="Enter password" autocomplete="current-password" required>
          <button type="button" class="show-toggle" id="togglePwd" aria-pressed="false">Show</button>
        </div>
      </div>

      <div class="form-group row" style="margin-top:6px">
        <label style="display:flex;align-items:center;gap:8px;font-weight:500"><input type="checkbox" id="remember" name="remember"> Remember me</label>
        <a class="small-link" href="#">Forgot password?</a>
      </div>

      <div style="margin-top:12px">
        <button class="btn" type="submit" name="login_submit" id="loginBtn">Login</button>
      </div>

      <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_submit'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
          // Simulate login (replace with real auth)
          echo '<div id="successMsg">Login successful! Redirecting...</div>';
          // header('Location: dashboard.php'); // Uncomment for real redirect
        } else {
          echo '<div id="errorMsg">Invalid email or password.</div>';
        }
      }
      ?>

      <div class="divider" aria-hidden="true">or</div>

      <div style="display:flex;gap:10px">
        <button type="button" class="social-btn" aria-label="Continue with Google">Google</button>
        <button type="button" class="social-btn" aria-label="Continue with Facebook">Facebook</button>
      </div>

      <div class="foot">
        Don't have an account? <a href="register.php" class="small-link">Register</a>
      </div>
    </form>
  </section>
</main>

<script>
  const pwd = document.getElementById('password');
  const toggle = document.getElementById('togglePwd');
  toggle.addEventListener('click', ()=> {
    const isHidden = pwd.type === 'password';
    pwd.type = isHidden ? 'text' : 'password';
    toggle.textContent = isHidden ? 'Hide' : 'Show';
    toggle.setAttribute('aria-pressed', String(isHidden));
  });
</script>

<?php include '../footer.php'; ?>
