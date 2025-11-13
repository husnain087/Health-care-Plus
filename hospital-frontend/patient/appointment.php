<?php
$pageTitle = 'Book Appointment — HospitalCare+';
include '../header.php';
?>
<link rel="stylesheet" href="appointment.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
// Initialize session and dummy patient data
session_start();
if (!isset($_SESSION['patient_name'])) {
    $_SESSION['patient_name'] = "Muhammad Husnain Haider";
    $_SESSION['patient_email'] = "husnain@example.com";
    $_SESSION['patient_id'] = 101;
    $_SESSION['patient_age'] = 30;
    $_SESSION['patient_gender'] = "Male";
    $_SESSION['patient_blood_group'] = "O+";
}

// Initialize appointments array if not exists
if (!isset($_SESSION['appointments'])) {
    $_SESSION['appointments'] = [];
}

// Handle form submission
$success_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $doctor = trim($_POST['doctor'] ?? '');
    $appointment_date = trim($_POST['appointment_date'] ?? '');
    $appointment_time = trim($_POST['appointment_time'] ?? '');
    $symptoms = trim($_POST['symptoms'] ?? '');

    // Basic validation
    if (empty($full_name) || empty($email) || empty($department) || empty($doctor) || empty($appointment_date) || empty($appointment_time)) {
        $error_message = 'All fields are required.';
    } else {
        // Create appointment array
        $appointment = [
            'id' => count($_SESSION['appointments']) + 1,
            'patient_id' => $_SESSION['patient_id'],
            'full_name' => $full_name,
            'email' => $email,
            'department' => $department,
            'doctor' => $doctor,
            'date' => $appointment_date,
            'time' => $appointment_time,
            'symptoms' => $symptoms,
            'status' => 'Pending'
        ];

        // Save to session
        $_SESSION['appointments'][] = $appointment;

        // Commented DB insertion code
        // include('../db_connect.php');
        // $query = "INSERT INTO appointments (patient_id, doctor_name, department, date, time, symptoms, status)
        // VALUES (?, ?, ?, ?, ?, ?, 'Pending')";
        // $stmt = $conn->prepare($query);
        // $stmt->bind_param('isssss', $appointment['patient_id'], $appointment['doctor'], $appointment['department'], $appointment['date'], $appointment['time'], $appointment['symptoms']);
        // $stmt->execute();

        $success_message = 'Appointment booked successfully! You can view details in your dashboard. <a href="dashboard.php" class="btn btn-success mt-2">Go to Dashboard</a>';
        // Redirect to dashboard after 2 seconds
        header("refresh:2;url=dashboard.php");
    }
}
?>

<section class="login-hero">
  <div class="login-container">
    <div class="login-card">
      <h1>Book Appointment</h1>
      <p class="lead">Schedule your appointment with our healthcare professionals.</p>

      <?php if (!empty($success_message)): ?>
        <div class="alert alert-success" role="alert">
          <?php echo htmlspecialchars($success_message); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo htmlspecialchars($error_message); ?>
        </div>
      <?php endif; ?>

      <form method="POST" novalidate>
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input id="full_name" name="full_name" type="text" placeholder="Enter your full name" required value="<?php echo htmlspecialchars($_SESSION['patient_name'] ?? ''); ?>">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="Enter your email" readonly required value="<?php echo htmlspecialchars($_SESSION['patient_email'] ?? ''); ?>">
        </div>

        <div class="form-group">
          <label for="department">Department</label>
          <select id="department" name="department" required>
            <option value="">Select Department</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Orthopedics">Orthopedics</option>
            <option value="Dermatology">Dermatology</option>
            <option value="Pediatrics">Pediatrics</option>
            <option value="Emergency Care">Emergency Care</option>
          </select>
        </div>

        <div class="form-group">
          <label for="doctor">Doctor</label>
          <select id="doctor" name="doctor" required>
            <option value="">Select Doctor</option>
            <option value="Dr. Ahmed Khan">Dr. Ahmed Khan</option>
            <option value="Dr. Aisha Patel">Dr. Aisha Patel</option>
            <option value="Dr. Rajesh Sharma">Dr. Rajesh Sharma</option>
            <option value="Dr. Maria Gonzalez">Dr. Maria Gonzalez</option>
            <option value="Dr. David Chen">Dr. David Chen</option>
          </select>
        </div>

        <div class="form-group">
          <label for="appointment_date">Appointment Date</label>
          <input id="appointment_date" name="appointment_date" type="date" required min="<?php echo date('Y-m-d'); ?>">
        </div>

        <div class="form-group">
          <label for="appointment_time">Appointment Time</label>
          <select id="appointment_time" name="appointment_time" required>
            <option value="">Select Time</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="11:30 AM">11:30 AM</option>
            <option value="1:00 PM">1:00 PM</option>
            <option value="2:30 PM">2:30 PM</option>
            <option value="4:00 PM">4:00 PM</option>
            <option value="5:30 PM">5:30 PM</option>
          </select>
        </div>

        <div class="form-group">
          <label for="symptoms">Symptoms / Description</label>
          <textarea id="symptoms" name="symptoms" rows="4" placeholder="Describe your symptoms or reason for visit" required><?php echo htmlspecialchars($symptoms ?? ''); ?></textarea>
        </div>

        <button class="btn" type="submit">Book Appointment</button>
      </form>
    </div>
  </div>
</section>

<?php include '../footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
