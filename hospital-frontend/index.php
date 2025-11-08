<?php $pageTitle = 'HospitalCare+ - Home'; include 'header.php'; ?>

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
                <form class="search search-hero" id="home-search-form" action="doctor-search.php" method="get">
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

<?php include 'footer.php'; ?>
