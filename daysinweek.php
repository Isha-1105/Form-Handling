<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Days of the Week</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    
    h1 {
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    input[type="submit"] {
      display: inline-block;
      width: 150px;
      padding: 10px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      background-color: #98FF98;
      color: black;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<h1>Days of the Week</h1>
  <form method="post">
    <input type="submit" name="day" value="Monday"><br>
    <input type="submit" name="day" value="Tuesday"><br>
    <input type="submit" name="day" value="Wednesday"><br>
    <input type="submit" name="day" value="Thursday"><br>
    <input type="submit" name="day" value="Friday"><br>
    
  </form>

  <?php
    if (isset($_POST["day"])) {
      $selectedDay = $_POST["day"];
      echo "<h1>You clicked: " . $selectedDay . "</h1>";
    } else {
      echo "<h1>Please select a day.</h1>";
    }
  ?>
  
</body>
</html>
