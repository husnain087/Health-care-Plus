<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Patient Profile — HospitalCare+</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
  :root{--primary:#007aff;--bg:#f6f8fb}
  *{box-sizing:border-box}
  body{margin:0;font-family:'Poppins',sans-serif;background:var(--bg);color:#0f1724}
  header{display:flex;align-items:center;justify-content:space-between;padding:14px 26px;background:#fff;border-bottom:1px solid #e6e9ef}
  .container{max-width:1100px;margin:28px auto;padding:0 16px}
  .grid{display:grid;grid-template-columns:320px 1fr;gap:24px}
  .card{background:#fff;padding:18px;border-radius:12px;border:1px solid #e9edf5}
  .avatar{width:120px;height:120px;border-radius:12px;background:#eef5ff;display:flex;align-items:center;justify-content:center;font-weight:700;color:#003366;font-size:20px}
  .muted{color:#6b7280}
  form .row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
  label{font-size:13px;margin-bottom:6px;display:block}
  input, select, textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #e6e9ef}
  textarea{min-height:90px}
  .save{padding:10px 16px;background:var(--primary);color:#fff;border-radius:8px;border:0;cursor:pointer}
  @media(max-width:880px){.grid{grid-template-columns:1fr}.avatar{margin:0 auto}}
</style>
</head>
<body>

<header>
  <a href="../index.html" class="logo" style="font-weight:700">HospitalCare+</a>
  <div>
    <a href="dashboard.html" style="color:#667;text-decoration:none">Back to Dashboard</a>
  </div>
</header>

<main class="container">
  <div class="grid">
    <aside class="card" aria-label="Profile summary">
      <div style="display:flex;gap:14px;align-items:center">
        <div class="avatar">MH</div>
        <div>
          <div style="font-weight:700">Muhammad Husnain</div>
          <div class="muted">Age: 19 • Male</div>
          <div style="margin-top:6px" class="muted">+92-300-1234567</div>
        </div>
      </div>

      <hr style="margin:14px 0;border:none;border-top:1px solid #f0f3f8">

      <div>
        <div style="font-weight:700;margin-bottom:8px">Emergency Contact</div>
        <div style="font-size:14px" class="muted">Name: Ali (Brother) — +92-300-7654321</div>
        <div style="margin-top:10px">
          <button style="padding:8px 12px;border-radius:8px;border:1px solid #e6e9ef;background:#fff;cursor:pointer">Edit</button>
        </div>
      </div>
    </aside>

    <section>
      <div class="card">
        <h3 style="margin:0 0 12px">Personal Information</h3>
        <form id="profileForm" onsubmit="event.preventDefault(); saveProfile()">
          <div class="row" style="margin-bottom:12px">
            <div>
              <label for="fullName">Full Name</label>
              <input id="fullName" value="Muhammad Husnain">
            </div>
            <div>
              <label for="dob">Date of Birth</label>
              <input id="dob" type="date" value="2006-02-11">
            </div>
          </div>

          <div class="row" style="margin-bottom:12px">
            <div>
              <label for="email">Email</label>
              <input id="email" type="email" value="husnain@example.com">
            </div>
            <div>
              <label for="phone">Phone</label>
              <input id="phone" value="+92-300-1234567">
            </div>
          </div>

          <div style="margin-bottom:12px">
            <label for="address">Address</label>
            <textarea id="address">123 Medical Ave, Suite 10</textarea>
          </div>

          <div class="card" style="margin-bottom:12px">
            <h4 style="margin:0 0 10px">Medical Details</h4>
            <div style="display:flex;gap:12px;flex-wrap:wrap">
              <div style="min-width:160px">
                <label>Blood Group</label>
                <input value="B+">
              </div>
              <div style="min-width:260px">
                <label>Known Allergies (comma separated)</label>
                <input value="Penicillin">
              </div>
            </div>
          </div>

          <div style="display:flex;gap:12px;justify-content:flex-end">
            <button type="button" onclick="resetForm()" style="padding:10px;border-radius:8px;border:1px solid #e6e9ef;background:#fff">Cancel</button>
            <button class="save" type="submit">Save Changes</button>
          </div>
        </form>
      </div>
    </section>
  </div>
</main>

<script>
  function saveProfile(){
    // TODO: replace with real API call; example payload shown in comments
    const payload = {
      name: document.getElementById('fullName').value,
      dob: document.getElementById('dob').value,
      email: document.getElementById('email').value,
      phone: document.getElementById('phone').value,
      address: document.getElementById('address').value
    };
    console.log('Save profile payload', payload);
    alert('Profile saved (simulate). Connect to API to persist.');
  }
  function resetForm(){ location.reload(); }
</script>

</body>
</html>
