<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission Output</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedCountry = $_POST["country"];
    $selectedState = $_POST["state"];
    $selectedCity = $_POST["city"];

    echo "<h1>Selected Values</h1>";
    echo "<p>Selected Country: $selectedCountry</p>";
    echo "<p>Selected State: $selectedState</p>";
    echo "<p>Selected City: $selectedCity</p>";
  } else {
    echo "<h1>Error</h1>";
    echo "<p>This page should only be accessed through form submission.</p>";
  }
  ?>
</body>
</html>
