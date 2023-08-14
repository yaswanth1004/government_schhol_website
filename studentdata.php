<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Student Registration Data | Government School</title>
</head>
<body>
  <header>
    <h1>View Student Registration Data</h1>
  </header>
  <main>
    <section id="view-data">
      <h2>Student Registration Data</h2>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "web";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM student_registration";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo '<table border = "1">';
          echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Grade</th><th>Email</th><th>Phone</th><th>Address</th></tr>';
          while ($row = $result->fetch_assoc()) {
              echo '<tr>';
              echo '<td>' . $row["id"] . '</td>';
              echo '<td>' . $row["first_name"] . '</td>';
              echo '<td>' . $row["last_name"] . '</td>';
              echo '<td>' . $row["dob"] . '</td>';
              echo '<td>' . $row["gender"] . '</td>';
              echo '<td>' . $row["grade"] . '</td>';
              echo '<td>' . $row["email"] . '</td>';
              echo '<td>' . $row["phone"] . '</td>';
              echo '<td>' . $row["address"] . '</td>';
              echo '</tr>';
          }
          echo '</table>';
      } else {
          echo 'No student registration data found.';
      }

      $conn->close();
      ?>
    </section>
  </main>
</body>
</html>
