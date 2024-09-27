<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Hover Example</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #f8f9fa;
            padding: 20px;
            font-size: 24px;
        }
        .image-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 50px auto;
        }
        .image-container img {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: opacity 0.3s ease-in-out;
        }
        .image-container img.image2 {
            opacity: 0;
        }
        .image-container:hover img.image1 {
            opacity: 0;
        }
        .image-container:hover img.image2 {
            opacity: 1;
        }
    </style>
</head>
<body>

<header>
    My Image Hover Page
</header>

<div class="image-container">
    <img src="images/image1.jpg" alt="First Image" class="image1">
    <img src="images/image6.jpg" alt="Second Image" class="image2">
</div>

</body>
</html>
