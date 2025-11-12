<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? $pageTitle : 'HospitalCare+'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/web-dev/hospital-frontend/assets/css/style.css" />
</head>
<body>  
  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-col about">
        <a href="index.php" class="logo">HospitalCare<span>+</span></a>
        <p>HospitalCare+ is a smart healthcare platform connecting patients with verified doctors, labs, hospitals & specialists using modern AI-driven search recommendation.</p>
        <p>We ensure fast, trusted & secure medical appointments and emergency guidance.</p>
      </div>

      <div class="footer-col">
        <h4>Specialties</h4>
        <ul class="footer-links">
          <li><a href="#">Cardiology</a></li>
          <li><a href="#">Orthopedics</a></li>
          <li><a href="#">Neurology</a></li>
          <li><a href="#">Dermatology</a></li>
          <li><a href="#">Pediatrics</a></li>
          <li><a href="#">Emergency Care</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Support</h4>
        <ul class="footer-links">
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Appointment Guide</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Report Issue</a></li>
          <li><a href="#">Medical Advisory</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Stay Updated</h4>
        <p>Get monthly health tips, AI medical insights & promotions in your inbox.</p>
        <form class="newsletter-form" method="post" action="">
          <input type="email" name="newsletter_email" placeholder="Enter your email" required>
          <button type="submit" name="newsletter_submit">Subscribe</button>
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newsletter_submit'])) {
            $email = filter_var($_POST['newsletter_email'], FILTER_SANITIZE_EMAIL);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              echo '<p style="color: green; margin-top: 10px;">Thank you for subscribing!</p>';
            } else {
              echo '<p style="color: red; margin-top: 10px;">Invalid email address.</p>';
            }
          }
          ?>
        </form>

        <h4 style="margin-top:18px;">Follow</h4>
        <div class="socials">

          <a href="#" aria-label="Facebook" class="social">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M22 12.06C22 6.48 17.52 2 11.94 2S2 6.48 2 12.06c0 4.99 3.66 9.13 8.44 9.94v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.9h-2.34V22c4.78-.81 8.44-4.95 8.44-9.94Z"/></svg>
          </a>

          <a href="#" aria-label="Instagram" class="social">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5A5.5 5.5 0 1 1 6.5 13 5.5 5.5 0 0 1 12 7.5Zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5Zm5.75-2.75a1 1 0 1 1-1 1 1 1 0 0 1 1-1Z"/></svg>
          </a>

          <a href="#" aria-label="Twitter" class="social">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M21.53 7.64c.01.16.01.31.01.47 0 4.79-3.64 10.31-10.31 10.31-2.05 0-3.95-.6-5.55-1.64.28.03.56.05.85.05 1.7 0 3.27-.58 4.52-1.56a3.63 3.63 0 0 1-3.39-2.52c.23.04.46.06.71.06.34 0 .67-.04.99-.13a3.62 3.62 0 0 1-2.9-3.55v-.05c.49.27 1.07.44 1.68.46a3.61 3.61 0 0 1-1.61-3 3.59 3.59 0 0 1 .49-1.83 10.29 10.29 0 0 0 7.47 3.79 3.62 3.62 0 0 1 6.16-3.3 7.2 7.2 0 0 0 2.29-.88 3.63 3.63 0 0 1-1.59 2 7.17 7.17 0 0 0 2.08-.57 7.77 7.77 0 0 1-1.81 1.87Z"/></svg>
          </a>

          <a href="#" aria-label="LinkedIn" class="social">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5ZM.5 8.5h4V23h-4V8.5Zm7 0h3.8v2h.05c.53-1 1.8-2.05 3.7-2.05 3.96 0 4.7 2.6 4.7 6V23h-4v-6.5c0-1.55-.03-3.54-2.16-3.54-2.17 0-2.5 1.7-2.5 3.43V23h-3.6V8.5Z"/></svg>
          </a>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      © 2025 HospitalCare+. All Rights Reserved. <br>
      <a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Cookies</a> | <a href="#">Medical Disclaimer</a>
    </div>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>