<?php $pageTitle = 'Patient Dashboard — HospitalCare+'; include '../header.php'; ?>

<main class="main">
  <aside class="sidebar" aria-label="Patient navigation">
    <nav class="nav">
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="../doctor-search.php">Search Doctors</a>
      <a href="appointment.php">My Appointments</a>
      <a href="profile.php">Medical Records / Profile</a>
      <a href="#">Prescriptions</a>
      <a href="#">Billing</a>
      <a href="#">Settings</a>
    </nav>
  </aside>

  <section class="content">
    <div class="stats">
      <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div>
            <div style="font-size:13px;color:var(--muted)">Upcoming</div>
            <div style="font-weight:700;font-size:20px">2</div>
          </div>
          <div style="text-align:right">
            <div style="font-size:13px;color:var(--muted)">Next</div>
            <div style="font-weight:600">Dr. Ahmed — 18 Nov, 2:00 PM</div>
          </div>
        </div>
      </div>

      <div class="card">
        <div style="font-size:13px;color:var(--muted)">Active Prescriptions</div>
        <div style="font-weight:700;font-size:20px;margin-top:8px">1</div>
      </div>

      <div class="card">
        <div style="font-size:13px;color:var(--muted)">Pending Payments</div>
        <div style="font-weight:700;font-size:20px;margin-top:8px">0</div>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:2fr 1fr;gap:18px">
      <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:start">
          <div>
            <div style="font-size:13px;color:var(--muted)">Upcoming Appointment</div>
            <div style="display:flex;gap:14px;align-items:center;margin-top:12px">
              <div class="avatar">DA</div>
              <div>
                <div style="font-weight:700">Dr. Aisha Khan</div>
                <div class="muted">Cardiologist — City Hospital</div>
                <div style="margin-top:8px;font-weight:600">18 Nov 2025 — 14:00</div>
                <div class="muted" style="margin-top:6px">Clinic: 123 Health St, Block A</div>
              </div>
            </div>
          </div>
          <div style="display:flex;flex-direction:column;gap:8px">
            <button class="btn" onclick="location.href='appointment.php'">View Details</button>
            <button style="padding:8px;border-radius:8px;border:1px solid #e6e9ef;background:#fff;cursor:pointer">Cancel</button>
          </div>
        </div>
      </div>

      <div class="card quick-actions">
        <div style="font-weight:700;margin-bottom:8px">Quick Actions</div>
        <button class="btn" onclick="location.href='appointment.php'">Book Appointment</button>
        <button style="padding:10px;border-radius:8px;border:1px solid #e6e9ef;background:#fff;cursor:pointer" onclick="alert('Upload record flow')">Upload Medical Record</button>
        <button style="padding:10px;border-radius:8px;border:1px solid #e6e9ef;background:#fff;cursor:pointer">Request Prescription Refill</button>
      </div>
    </div>

    <div style="margin-top:18px">
      <div style="font-weight:700;margin-bottom:10px">Recent Medical Records</div>
      <div class="card">
        <table>
          <thead>
            <tr><th>File</th><th>Date</th><th>Type</th><th></th></tr>
          </thead>
          <tbody>
            <tr><td>cbc_report.pdf</td><td>01 Oct 2025</td><td>Lab</td><td><a href="#">Download</a></td></tr>
            <tr><td>xray_chest.jpg</td><td>12 Sep 2025</td><td>Imaging</td><td><a href="#">Download</a></td></tr>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</main>

<?php include '../footer.php'; ?>
