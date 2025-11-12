<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($pageTitle) ? $pageTitle : 'HospitalCare+'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/web-dev/hospital-frontend/assets/css/style.css" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.php" class="logo">HospitalCare<span>+</span></a>
      <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">☰</button>
      <nav class="site-nav" id="site-nav">
        <ul class="main-links">
          <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
          <li><a href="doctor-search.php">Find Doctors</a></li>
          <li><a href="#testimonials">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="auth-actions">
          <div class="login-menu" id="login-menu">
            <button class="btn btn-primary" id="login-menu-toggle" aria-haspopup="true" aria-expanded="false">Login</button>
            <div class="login-dropdown" id="login-dropdown" role="menu" aria-hidden="true">
              <a href="patient/login.php" role="menuitem">Patient Login</a>
              <a href="doctor/login.php" role="menuitem">Doctor Login</a>
              <a href="admin/login.php" role="menuitem">Admin</a>
            </div>
          </div>
          <a class="btn btn-cta" href="patient/appointment.php">Book Appointment</a>
        </nav>
      </div>
    </div>
  </header>
