<?php
$pageTitle = 'Patient Login - HospitalCare+';
include '../header.php';
?>
<link rel="stylesheet" href="patient.css">
<?php

// Initialize session
session_start();

// Initialize variables
$login_error = '';
$register_error = '';
$register_success = '';
$email = '';
$register_email = '';
$register_name = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        // Login form
        $email = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        // Basic validation
        if (empty($email)) {
            $login_error = 'Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $login_error = 'Invalid email format.';
        } elseif (empty($password)) {
            $login_error = 'Password is required.';
        } else {
            // Here you would typically check against a database
            // For now, simulate a simple check (replace with actual authentication)
            if ($email === 'patient@example.com' && $password === 'password') {
                // Successful login - start session and redirect
                $_SESSION['patient_logged_in'] = true;
                $_SESSION['patient_email'] = $email;
                header('Location: dashboard.php'); // Redirect to patient dashboard
                exit;
            } else {
                $login_error = 'Invalid email or password.';
            }
        }
    } elseif (isset($_POST['register'])) {
        // Registration form
        $register_name = trim($_POST['register_name'] ?? '');
        $register_email = trim($_POST['register_email'] ?? '');
        $register_password = trim($_POST['register_password'] ?? '');
        $register_confirm = trim($_POST['register_confirm'] ?? '');

        // Basic validation
        if (empty($register_name)) {
            $register_error = 'Full name is required.';
        } elseif (empty($register_email)) {
            $register_error = 'Email is required.';
        } elseif (!filter_var($register_email, FILTER_VALIDATE_EMAIL)) {
            $register_error = 'Invalid email format.';
        } elseif (empty($register_password)) {
            $register_error = 'Password is required.';
        } elseif (strlen($register_password) < 6) {
            $register_error = 'Password must be at least 6 characters.';
        } elseif ($register_password !== $register_confirm) {
            $register_error = 'Passwords do not match.';
        } else {
            // Simulate registration (store in session for demo)
            $_SESSION['registered_users'][$register_email] = [
                'name' => $register_name,
                'password' => password_hash($register_password, PASSWORD_DEFAULT),
                'email' => $register_email
            ];

            $register_success = 'Registration successful! You can now login.';
            // Redirect to login after 2 seconds
            header("refresh:2;url=login.php");
        }
    }
}
?>

<section class="login-hero">
  <div class="login-container">
    <div class="login-card" id="loginCard">
      <h1 id="loginHeading">Patient Login</h1>
      <p class="lead">Access your appointments, medical records and prescriptions.</p>

      <?php if (!empty($register_success)): ?>
        <div class="alert alert-success" role="alert">
          <?php echo htmlspecialchars($register_success); ?>
        </div>
      <?php endif; ?>

      <form method="POST" novalidate id="loginForm">
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Enter your email" autocomplete="email" required value="<?php echo htmlspecialchars($email); ?>">
          <?php if($login_error && (strpos($login_error, 'email') !== false || strpos($login_error, 'Email') !== false)): ?>
            <div class="error"><?php echo htmlspecialchars($login_error); ?></div>
          <?php endif; ?>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div style="display:flex;gap:8px;">
            <input id="password" name="password" type="password" placeholder="Enter password" autocomplete="current-password" required style="flex:1;">
            <button type="button" class="show-toggle" id="togglePwd" aria-pressed="false">Show</button>
          </div>
          <?php if($login_error && (strpos($login_error, 'password') !== false || strpos($login_error, 'Password') !== false)): ?>
            <div class="error"><?php echo htmlspecialchars($login_error); ?></div>
          <?php endif; ?>
        </div>

        <div class="form-group row">
          <label style="display:flex;align-items:center;gap:8px;font-weight:500"><input type="checkbox" id="remember"> Remember me</label>
          <a class="small-link" href="#">Forgot password?</a>
        </div>

        <button class="btn" type="submit" name="login" id="loginBtn">Login</button>

        

        <div style="display:flex;gap:10px">
          <button type="button" class="social-btn" aria-label="Continue with Google">
            <svg width="18" height="18" viewBox="0 0 24 24" style="margin-right:8px;">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Google
          </button>
          <button type="button" class="social-btn" aria-label="Continue with Facebook">
            <svg width="18" height="18" viewBox="0 0 24 24" style="margin-right:8px;">
              <path fill="#1877F2" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
            Facebook
          </button>
        </div>

        <div class="foot">
          Don't have an account? <a href="#" class="small-link" id="showRegister">Register</a>
        </div>

        <div style="text-align: center; margin-top: 16px; font-size: 12px; color: var(--muted);">
          <strong>Testing Credentials:</strong><br>
          Email: patient@example.com<br>
          Password: password
        </div>
      </form>

      <!-- Registration Form -->
      <form method="POST" novalidate id="registerForm" style="display: none;">
        <h2>Patient Registration</h2>
        <p class="lead">Create your account to access healthcare services.</p>

        <?php if (!empty($register_error)): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($register_error); ?>
          </div>
        <?php endif; ?>

        <div class="form-group">
          <label for="register_name">Full Name</label>
          <input id="register_name" name="register_name" type="text" placeholder="Enter your full name" required value="<?php echo htmlspecialchars($register_name); ?>">
        </div>

        <div class="form-group">
          <label for="register_email">Email</label>
          <input id="register_email" name="register_email" type="email" placeholder="Enter your email" autocomplete="email" required value="<?php echo htmlspecialchars($register_email); ?>">
        </div>

        <div class="form-group">
          <label for="register_password">Password</label>
          <div style="display:flex;gap:8px;">
            <input id="register_password" name="register_password" type="password" placeholder="Create password" autocomplete="new-password" required style="flex:1;">
            <button type="button" class="show-toggle" id="toggleRegPwd" aria-pressed="false">Show</button>
          </div>
        </div>

        <div class="form-group">
          <label for="register_confirm">Confirm Password</label>
          <input id="register_confirm" name="register_confirm" type="password" placeholder="Confirm password" autocomplete="new-password" required>
        </div>

        <button class="btn" type="submit" name="register">Register</button>

        <div class="foot">
          Already have an account? <a href="#" class="small-link" id="showLogin">Login</a>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include '../footer.php'; ?>

<script>
  const pwd = document.getElementById('password');
  const toggle = document.getElementById('togglePwd');
  toggle.addEventListener('click', ()=> {
    const isHidden = pwd.type === 'password';
    pwd.type = isHidden ? 'text' : 'password';
    toggle.textContent = isHidden ? 'Hide' : 'Show';
    toggle.setAttribute('aria-pressed', String(isHidden));
  });

  // Registration form toggle
  const showRegister = document.getElementById('showRegister');
  const showLogin = document.getElementById('showLogin');
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');
  const loginHeading = document.getElementById('loginHeading');

  showRegister.addEventListener('click', (e) => {
    e.preventDefault();
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
    loginHeading.textContent = 'Patient Registration';
  });

  showLogin.addEventListener('click', (e) => {
    e.preventDefault();
    registerForm.style.display = 'none';
    loginForm.style.display = 'block';
    loginHeading.textContent = 'Patient Login';
  });

  // Registration password toggle
  const regPwd = document.getElementById('register_password');
  const toggleReg = document.getElementById('toggleRegPwd');
  toggleReg.addEventListener('click', ()=> {
    const isHidden = regPwd.type === 'password';
    regPwd.type = isHidden ? 'text' : 'password';
    toggleReg.textContent = isHidden ? 'Hide' : 'Show';
    toggleReg.setAttribute('aria-pressed', String(isHidden));
  });
</script>
