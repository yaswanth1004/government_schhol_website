<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "web";
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_form(name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Form data successfully stored in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Government School</title>
  <style>
   body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f9f9f9;
    }

    header {
      background-color: #003366;
      color: #fff;
      text-align: center;
      padding: 1rem;
    }

    nav {
      background-color: #004080;
      color: #fff;
      text-align: center;
      padding: 0.5rem;
    }

    nav ul {
      list-style: none;
    }

    nav ul li {
      display: inline-block;
      margin-right: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: #fff;
    }

    nav ul li a:hover {
      text-decoration: underline;
    }

    main {
      padding: 1rem;
    }

    section {
      margin-bottom: 30px;
    }

    h2 {
      color: #003366;
      border-bottom: 2px solid #003366;
      padding-bottom: 5px;
      margin-bottom: 15px;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    li {
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input,
    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      resize: vertical;
    }

    button {
      background-color: #003366;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      cursor: pointer;
    }

    button:hover {
      background-color: #004080;
    }

    footer {
      background-color: #003366;
      color: #fff;
      text-align: center;
      padding: 0.5rem;
    }
  </style>
  <script>
    function handleSubmit(event) {
      event.preventDefault();
      const form = event.target;
      const thankYouMessage = document.createElement("p");
      thankYouMessage.textContent = "Thank you for contacting us!";
      form.parentNode.replaceChild(thankYouMessage, form);
    }
  </script>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
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
    <section id="contact-info">
      <h2>Contact Information</h2>
      <ul>
        <li><strong>Address:</strong>  Amaravathi, Vijayawada, India</li>
        <li><strong>Phone:</strong>+91 8712160380</li>
        <li><strong>Email:</strong>yaswanthboddepalli1406@gmail.com</li>
      </ul>
    </section>
    <section id="contact-form">
      <h2>Send us a Message</h2>
      <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" name="submit">Submit</button>
      </form>
    </section>
  </main>
  <footer>
     <p>&copy; 2023 Government School.(21BCE9913 B.YASWANTH) All rights reserved.</p>
  </footer>
</body>
</html>

