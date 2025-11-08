<?php $pageTitle = 'Find a Doctor - HospitalCare+'; include 'header.php'; ?>
  <main>
    <!-- Add doctor search content here -->
    <section class="search-hero">
      <div class="container">
        <h1>Find a Doctor</h1>
        <p>Search for specialists in your area</p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['q'])) {
          $query = htmlspecialchars($_GET['q']);
          $city = htmlspecialchars($_GET['city'] ?? '');
          $gender = htmlspecialchars($_GET['gender'] ?? '');
          echo "<p>Search results for: $query in $city (Gender: $gender)</p>";
          // Simulate search results
          echo "<div class='search-results'>Sample doctors found...</div>";
        }
        ?>
      </div>
    </section>
  </main>
<?php include 'footer.php'; ?>


