<?php
$pageTitle = 'Patient Dashboard — HospitalCare+';
include '../header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
:root {
  --primary: #007aff;
  --light-bg: #f6f8fb;
  --dark-text: #0f1724;
  --card-bg: #fff;
}
body {
  font-family: 'Poppins', sans-serif;
  background-color: var(--light-bg);
}
.main {
  display: flex;
  min-height: 100vh;
}
.sidebar {
  width: 250px;
  background-color: var(--primary);
  color: #fff;
  padding: 25px 15px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 2px 0 8px rgba(0,0,0,0.08);
}
.nav a {
  display: flex;
  align-items: center;
  gap: 12px;
  color: #f0f0f0;
  text-decoration: none;
  font-weight: 500;
  padding: 10px 15px;
  border-radius: 8px;
  margin-bottom: 6px;
  transition: all 0.3s ease;
}
.nav a i {
  font-size: 18px;
}
.nav a:hover, .nav a.active {
  background: #005ecc;
  color: #fff;
}
.content {
  flex: 1;
  padding: 40px 50px;
}
.card {
  border: none;
  border-radius: 14px;
  box-shadow: 0 4px 18px rgba(0,0,0,0.05);
  margin-bottom: 24px;
}
.card-title {
  font-weight: 600;
  color: var(--dark-text);
  margin-bottom: 18px;
}
.table th {
  background-color: #f0f4fb;
  color: var(--dark-text);
  font-weight: 600;
}
.table td, .table th {
  vertical-align: middle;
}
.badge {
  font-size: 13px;
  padding: 6px 10px;
}
.btn-sm {
  padding: 6px 10px;
}
.sidebar-footer {
  font-size: 13px;
  color: rgba(255,255,255,0.8);
  text-align: center;
  margin-top: 20px;
}
@media (max-width: 768px) {
  .main {
    flex-direction: column;
  }
  .sidebar {
    width: 100%;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
  }
  .content {
    padding: 25px;
  }
}
</style>

<?php
// Initialize session and dummy patient data
session_start();
if (!isset($_SESSION['patient_name'])) {
    $_SESSION['patient_name'] = "Muhammad Husnain Haider";
    $_SESSION['patient_email'] = "husnain@example.com";
    $_SESSION['patient_id'] = 101;
}
if (!isset($_SESSION['patient_age'])) $_SESSION['patient_age'] = 30;
if (!isset($_SESSION['patient_gender'])) $_SESSION['patient_gender'] = "Male";
if (!isset($_SESSION['patient_blood_group'])) $_SESSION['patient_blood_group'] = "O+";

if (!isset($_SESSION['appointments'])) $_SESSION['appointments'] = [];

if (isset($_GET['cancel']) && is_numeric($_GET['cancel'])) {
    $cancel_id = (int)$_GET['cancel'];
    foreach ($_SESSION['appointments'] as $key => $appointment) {
        if ($appointment['id'] == $cancel_id) {
            unset($_SESSION['appointments'][$key]);
            $_SESSION['appointments'] = array_values($_SESSION['appointments']);
            break;
        }
    }
    header('Location: dashboard.php');
    exit;
}

// Commented DB fetch code
// include('../db_connect.php');
// $query = "SELECT * FROM appointments WHERE patient_id = ?";
// $stmt = $conn->prepare($query);
// $stmt->bind_param('i', $_SESSION['patient_id']);
// $stmt->execute();
// $result = $stmt->get_result();
// $appointments = $result->fetch_all(MYSQLI_ASSOC);
?>

<main class="main">
  <aside class="sidebar" aria-label="Patient navigation">
    <div>
      <h4 class="text-center mb-4">HospitalCare<span style="color:#ffea00">+</span></h4>
      <nav class="nav">
        <a href="dashboard.php" class="active"><i class="bi bi-speedometer2"></i>Dashboard</a>
        <a href="../doctor-search.php"><i class="bi bi-search"></i>Search Doctors</a>
        <a href="appointment.php"><i class="bi bi-calendar-plus"></i>Book Appointment</a>
        <a href="profile.php"><i class="bi bi-person-badge"></i>Profile</a>
        <a href="../index.php"><i class="bi bi-house"></i>Home</a>
        <a href="#"><i class="bi bi-file-earmark-medical"></i>Prescriptions</a>
        <a href="#"><i class="bi bi-credit-card-2-front"></i>Billing</a>
        <a href="#"><i class="bi bi-gear"></i>Settings</a>
      </nav>
    </div>
    <div class="sidebar-footer">
      © 2025 HospitalCare+
    </div>
  </aside>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-person-lines-fill"></i> Patient Profile</h5>
        <div class="row">
          <div class="col-md-6">
            <p><strong>Name:</strong> <?= htmlspecialchars($_SESSION['patient_name']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['patient_email']) ?></p>
            <p><strong>Patient ID:</strong> <?= htmlspecialchars($_SESSION['patient_id']) ?></p>
          </div>
          <div class="col-md-6">
            <p><strong>Age:</strong> <?= htmlspecialchars($_SESSION['patient_age']) ?> years</p>
            <p><strong>Gender:</strong> <?= htmlspecialchars($_SESSION['patient_gender']) ?></p>
            <p><strong>Blood Group:</strong> <?= htmlspecialchars($_SESSION['patient_blood_group']) ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="bi bi-calendar-week"></i> Booked Appointments</h5>
        <?php if (empty($_SESSION['appointments'])): ?>
          <p class="text-muted">No appointments booked yet. <a href="appointment.php" class="text-primary fw-semibold">Go to the appointment page to book one.</a> | <a href="../index.php" class="text-primary fw-semibold">Back to Home</a></p>
        <?php else: ?>
          <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Doctor</th>
                  <th>Department</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($_SESSION['appointments'] as $appointment): ?>
                  <tr>
                    <td><?= htmlspecialchars($appointment['id']) ?></td>
                    <td><?= htmlspecialchars($appointment['doctor']) ?></td>
                    <td><?= htmlspecialchars($appointment['department']) ?></td>
                    <td><?= htmlspecialchars($appointment['date']) ?></td>
                    <td><?= htmlspecialchars($appointment['time']) ?></td>
                    <td><span class="badge bg-warning"><?= htmlspecialchars($appointment['status']) ?></span></td>
                    <td>
                      <a href="?cancel=<?= $appointment['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')"><i class="bi bi-x-circle"></i> Cancel</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php include '../footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
