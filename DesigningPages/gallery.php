<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery Page</title>
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
                max-width: 1200px;
                margin: 50px auto;
                padding: 20px;
                text-align: center;
            }
            h2 {
                color: #007bff;
                margin-bottom: 40px;
            }
            .gallery {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
                justify-items: center;
            }
            .gallery img {
                width: 100%;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        <div class="container">
            <h2>Gallery</h2>

            <div class="gallery">
                <img src="images/image1.jpg" alt="Image 1">
                <img src="images/image2.jpg" alt="Image 3">
                <img src="images/image3.jpg" alt="Image 2">
                <img src="images/image4.jpg" alt="Image 4">
                <img src="images/image5.jpg" alt="Image 5">
                <img src="images/image6.jpg" alt="Image 6">
            </div>
        </div>
    </body>
</html>
