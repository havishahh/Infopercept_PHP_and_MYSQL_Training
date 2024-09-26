<!DOCTYPE html>
<html>

<head>
  <title>Form with Validation</title>
</head>

<body>

<?php 
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if name is empty
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z\r\n]+$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  // Check if email is empty
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    // Check if email address syntax is valid
    if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})$/", $email)) {
      $emailErr = "Invalid email format";
    }
  }

  // Check if website is empty
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // Check if URL address syntax is valid
    if (!preg_match("/^(http:\/\/|https:\/\/)?([\da-z.-]+)\.([a-z.]{2,4})\/?$/",$website))
    {
      $websiteErr = "Invalid URL";
    }
  }

  // Check if gender is empty
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  // Check if comment is empty
  if (empty($_POST["comment"])) {
    $comment = "";
  } 
  else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data); $data = htmlspecialchars($data);
  return $data; }
?>

  <h2>Form with Validation</h2>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br> 
    Website: <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>