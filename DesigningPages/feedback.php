<?php

// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $feedbackMessage = $_POST['feedbackMessage'];

    // Insert data into the feedback table
    $sql = "INSERT INTO feedback (name, email, contact, feedbackmsg) VALUES ('$name', '$email', '$contactno', '$feedbackMessage')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #007bff;
            padding: 1rem;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2rem;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #007bff;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input[type="text"], input[type="email"], textarea {
            width: 20%;
            padding: 5px;
            margin: 1px ;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .success-msg, .error-msg {
            text-align: center;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
        }
        .success-msg {
            background-color: #d4edda;
            color: #155724;
        }
        .error-msg {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <nav>
        <a href="home.php">Home</a> 
        <a href="gallery.php">Gallery</a> 
        <a href="login.php">Login</a> 
        <a href="feedback.php">Feedback</a>
    </nav>
    <h2>Submit Your Feedback</h2>
    <form method="POST" action="" style="text-align: center">
        <label for="name">Name:
        <input type="text" id="name" name="name" required></label><br><br>

        <label for="email">Email:
        <input type="email" id="email" name="email" required></label><br><br>

        <label for="contactno">Contact No.:
        <input type="text" id="contactno" name="contactno" required></label><br><br>

        <label for="feedbackMessage">Feedback Message:
        <textarea id="feedbackMessage" name="feedbackMessage" rows="4" cols="50" required></textarea></label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
