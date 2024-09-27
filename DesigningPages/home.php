<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
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
            .content {
                text-align: center;
                margin-top: 100px;
            }
            h1 {
                color: #007bff;
                font-size: 3rem;
                margin-bottom: 20px;
            }
            .quote {
                font-size: 1.5rem;
                color: #555;
                font-style: italic;
                max-width: 800px;
                margin: 0 auto;
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

        <div class="content">
            <h1>Welcome to Our Website</h1>
            <p class="quote">
                "The only way to do great work is to love what you do. If you haven’t found it yet, keep looking. 
                Don’t settle. As with all matters of the heart, you’ll know when you find it."
            </p>
        </div>

    </body>
</html>
