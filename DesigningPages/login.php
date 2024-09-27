<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            nav {
                background-color: #007bff;
                padding: 1rem;
                text-align: center;
                width: 100%;
                position: absolute;
                top: 0;
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

            .login-container {
                background-color: #fff;
                padding: 40px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                width: 300px;
                height: 300px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            h2 {
                color: #007bff;
                margin-bottom: 20px;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border-radius: 4px;
                border: 1px solid #ccc;
            }

            input[type="submit"] {
                background-color: #007bff;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
                font-size: 1rem;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            .error {
                color: red;
                margin-top: 15px;
            }
        </style>
    </head>

    
    <?php
    // Check if form is submitted
    if (isset($_POST['login'])) {
        // Get form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'project');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to check if username and password exist in the database
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        // If user found
        if ($result->num_rows > 0) {
            // Redirect to home.php
            header('Location: home.php');
            exit(); // Stop further execution after redirection
        } else {
            echo "<p class='error'>Invalid username or password. Please try again.</p>";
        }

        // Close connection
        $conn->close();
    }
    ?>

    <body>
        <nav>
            <a href="home.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="login.php">Login</a>
            <a href="feedback.php">Feedback</a>
        </nav>

        <div class="login-container">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </body>
</html>