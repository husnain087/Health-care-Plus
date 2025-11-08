<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HospitalCare+ - Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.html" class="logo">HospitalCare<span>+</span></a>
      <button class="nav-toggle" id="nav-toggle" aria-label="Toggle navigation">☰</button>
      <nav class="site-nav" id="site-nav">
        <ul class="main-links">
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="doctor-search.html">Find Doctors</a></li>
          <li><a href="#testimonials">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="auth-actions">
          <div class="login-menu" id="login-menu">
            <button class="btn btn-primary" id="login-menu-toggle" aria-haspopup="true" aria-expanded="false">Login</button>
            <div class="login-dropdown" id="login-dropdown" role="menu" aria-hidden="true">
              <a href="patient/login.html" role="menuitem">Patient Login</a>
              <a href="doctor/login.html" role="menuitem">Doctor Login</a>
              <a href="admin/login.html" role="menuitem">Admin</a>
            </div>
          </div>
          <a class="btn btn-cta" href="patient/appointment.html">Book Appointment</a>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-content">
          <h1>Find Your Doctor, Anytime, Anywhere</h1>
          <p>Search trusted specialists, book appointments online, and manage your healthcare with ease.</p>
          <div class="search-card">
            <div class="search-layout">
              <div class="search-copy">
                <h3 class="hero-lines">
                  <span class="line" style="--i:1">Find and Book</span>
                  <span class="line" style="--i:2">the Best Doctors</span>
                  <span class="line" style="--i:3">near you</span>
                </h3>
                <form class="search search-hero" id="home-search-form" action="doctor-search.html">
              <div class="search-group">
                <label class="sr-only" for="hs-q">Search</label>
                <input id="hs-q" type="text" name="q" placeholder="Search by specialty or doctor's name" aria-label="Search doctors" />
              </div>
              <label class="sr-only" for="hs-city">City</label>
              <select id="hs-city" name="city" aria-label="Filter by city">
                <option value="">City</option>
                <option>New York</option>
                <option>London</option>
                <option>Dubai</option>
              </select>
              <label class="sr-only" for="hs-gender">Gender</label>
              <select id="hs-gender" name="gender" aria-label="Filter by gender">
                <option value="">Gender</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
              </select>
              <button type="submit" class="btn btn-primary search-btn" aria-label="Search doctors">Search</button>
                </form>
              </div>
              <div class="search-illustration" aria-hidden="true"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="specialties">
      <div class="container">
        <div class="specialties-header">
          <h2>Top Specialties</h2>
          <div class="slider-controls">
            <button class="slider-btn" id="sp-prev" aria-label="Previous">‹</button>
            <button class="slider-btn" id="sp-next" aria-label="Next">›</button>
          </div>
        </div>
        <div class="slider-viewport">
          <div class="cards cards-slider" id="specialties-track">
            <article class="card"><div class="icon" aria-hidden="true">❤️</div><h3>Cardiology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🦷</div><h3>Dentistry</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">👁️</div><h3>Ophthalmology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🧠</div><h3>Neurology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🧴</div><h3>Dermatology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🫁</div><h3>Pulmonology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🦴</div><h3>Orthopedics</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🧬</div><h3>Oncology</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🍼</div><h3>Pediatrics</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🫀</div><h3>Cardiothoracic</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🦻</div><h3>ENT</h3></article>
            <article class="card"><div class="icon" aria-hidden="true">🩺</div><h3>General Medicine</h3></article>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
      <div class="container">
        <div class="section-header">
          <h2>Why Choose Us</h2>
          <p>Experience healthcare that prioritizes your convenience, security, and well-being</p>
        </div>
        <div class="why-cards">
          <article class="why-card">
            <div class="why-card-image">
              <img src="assets/images/doctor2.webp" alt="Verified Doctors" />
            </div>
            <div class="why-card-content">
              <h3>Verified Doctors</h3>
              <p>All our healthcare professionals undergo rigorous verification processes before joining our platform. We verify medical licenses, board certifications, educational credentials, and professional experience to ensure every doctor meets our high standards.</p>
              <p>Our credentialing team conducts comprehensive background checks and confirms that all specialists are in good standing with their respective medical boards, giving you complete confidence in the quality of care you'll receive.</p>
            </div>
          </article>
          <article class="why-card reverse">
            <div class="why-card-content">
              <h3>Secure Records</h3>
              <p>Your medical information is protected with industry-leading encryption and security protocols. We prioritize your privacy and ensure your health data remains confidential and secure.</p>
              <p>Our platform uses advanced security measures including end-to-end encryption, secure data storage, and strict access controls to safeguard your personal health information at all times.</p>
            </div>
            <div class="why-card-image">
              <img src="assets/images/record.webp" alt="Secure Records" />
            </div>
          </article>
          <article class="why-card">
            <div class="why-card-image">
              <img src="assets/images/booking.webp" alt="Fast Appointment Booking" />
            </div>
            <div class="why-card-content">
              <h3>Fast Appointment Booking</h3>
              <p>Book your appointment in minutes with our streamlined online system. No phone calls, no waiting on hold—schedule your visit at your convenience, 24/7 from any device. Our intuitive booking interface shows real-time availability, making it easy to find a time that works with your schedule.</p>
              <p>Select from available time slots, choose your preferred doctor based on verified profiles, and receive instant confirmation via email and SMS. Cancel or reschedule with just a few clicks, anytime you need.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Patient Testimonials Section -->
    <section class="testimonials" id="testimonials">
      <div class="container">
        <div class="section-header">
          <h2>Patient Testimonials</h2>
          <p>Hear from our satisfied patients about their experience</p>
        </div>
        <div class="testimonial-cards">
          <article class="testimonial-card">
            <div class="testimonial-image">
              <img src="assets/images/doctor1.webp" alt="Patient testimonial" />
            </div>
            <div class="testimonial-content">
              <div class="testimonial-stars">
                <span>⭐⭐⭐⭐⭐</span>
              </div>
              <blockquote>
                <p>"The booking process was incredibly smooth, and I found a great cardiologist in my area. The platform made it so easy to compare doctors and book an appointment that fit my schedule."</p>
              </blockquote>
              <div class="testimonial-author">
                <strong>Sarah Johnson</strong>
                <span>Patient since 2024</span>
              </div>
            </div>
          </article>
          <article class="testimonial-card">
            <div class="testimonial-image">
              <img src="assets/images/doctor1.webp" alt="Patient testimonial" />
            </div>
            <div class="testimonial-content">
              <div class="testimonial-stars">
                <span>⭐⭐⭐⭐⭐</span>
              </div>
              <blockquote>
                <p>"As someone who travels frequently, being able to access my medical records and book appointments online is a game-changer. The security features give me peace of mind."</p>
              </blockquote>
              <div class="testimonial-author">
                <strong>Michael Chen</strong>
                <span>Patient since 2023</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Medical Tips Section -->
    <section class="medical-tips">
      <div class="container">
        <div class="section-header">
          <h2>Medical Tips & Health Insights</h2>
          <p>Stay informed with expert health advice and wellness tips</p>
        </div>
        <div class="tips-grid">
          <article class="tip-card">
            <div class="tip-image">
              <img src="assets/images/heart.webp" alt="Heart Health" />
            </div>
            <div class="tip-content">
              <h3>Heart Health Matters</h3>
              <p class="tip-subtitle">Keep your heart strong with regular exercise and a balanced diet</p>
              <p>Cardiovascular health is the foundation of overall well-being. Regular cardiovascular exercise—such as brisk walking, swimming, or cycling—strengthens your heart muscle and improves circulation. Aim for at least 150 minutes of moderate-intensity exercise per week, or 75 minutes of vigorous activity.</p>
              <p>Nutrition plays an equally crucial role. Incorporate heart-friendly foods into your diet: leafy greens, whole grains, fatty fish rich in omega-3s, nuts, and berries. Limit processed foods, saturated fats, and excessive sodium. Regular health screenings are essential—monitor your blood pressure, cholesterol levels, and consult with your cardiologist annually.</p>
            </div>
          </article>
          <article class="tip-card">
            <div class="tip-image">
              <img src="assets/images/diabetes.webp" alt="Diabetes Management" />
            </div>
            <div class="tip-content">
              <h3>Diabetes Management</h3>
              <p class="tip-subtitle">Monitor blood sugar levels and maintain a consistent meal schedule</p>
              <p>Effective diabetes management requires a comprehensive approach combining medication, nutrition, and lifestyle changes. Regular blood glucose monitoring helps you understand how different foods, activities, and medications affect your levels. Keep a log to identify patterns and share insights with your healthcare team.</p>
              <p>Meal planning is crucial—aim for consistent meal times and balanced portions. Focus on complex carbohydrates with low glycemic indexes, lean proteins, and healthy fats. Physical activity improves insulin sensitivity—aim for 30 minutes of moderate exercise most days. Regular check-ups with your endocrinologist ensure your treatment plan stays optimized.</p>
            </div>
          </article>
          <article class="tip-card">
            <div class="tip-image">
              <img src="assets/images/mental welnes.webp" alt="Mental Wellness" />
            </div>
            <div class="tip-content">
              <h3>Mental Wellness</h3>
              <p class="tip-subtitle">Prioritize self-care and seek support when needed</p>
              <p>Mental health is just as important as physical health, yet often overlooked. Prioritizing your psychological well-being involves developing healthy coping mechanisms for stress, anxiety, and life's challenges. Practice mindfulness techniques such as meditation, deep breathing exercises, or yoga to center yourself and reduce cortisol levels.</p>
              <p>Maintaining strong social connections is vital for emotional health. Never hesitate to seek professional support when needed—therapists, counselors, and psychiatrists are trained to help you navigate mental health challenges. Asking for help is a sign of strength, not weakness. Your mental wellness journey is unique—find the support that works best for you.</p>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-col about">
        <a href="index.html" class="logo">HospitalCare<span>+</span></a>
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
        <form class="newsletter-form">
          <input type="email" placeholder="Enter your email">
          <button type="submit">Subscribe</button>
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


