<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $grade = $_POST["grade"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

  $sql = "INSERT INTO student_registration (first_name, last_name, dob, gender, grade, email, phone, address) 
   VALUES ('$first_name', '$last_name', '$dob', '$gender', '$grade', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registration data successfully stored in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration | Government School</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Student Registration</h1>
  </header>
<nav>
  <ul>
    <li><a href="home.html">Home</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="academics.html">Academics</a></li>
    <li><a href="facilities.html">Facilities</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="contact_us.php">Contact</a></li>
    <li><a href="student_registration.php">Student Registration</a></li> 
  </ul>
</nav>
  <main>
    <section id="registration-form">
      <h2>Register as a New Student</h2>
      <form action="#" method="post">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" required>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>

        <label for="grade">Grade:</label>
        <input type="number" id="grade" name="grade" min="1" max="12" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
	<label for="tc-document">Attach TC Document:</label>
        <input type="file" id="tc-document" name="tc-document" accept=".pdf, .doc, .docx">
        <button type="submit">Register</button>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Government School.(21BCE9913 B.YASWANTH) All rights reserved.</p>
  </footer>
</body>
</html>
