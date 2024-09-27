<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h3>My Calculator</h3>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
                <label for="number1">Enter Number:</label>
                <input type="number" name="number1" class="form-control" placeholder="Enter number" required>
              </div>
              <div class="form-group">
                <label for="number2">Enter Number:</label>
                <input type="number" name="number2" class="form-control" placeholder="Enter number" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Calculate</button>
            </form>

            <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                
                $sum = $number1 + $number2;
                $difference = $number1 - $number2;
                $product = $number1 * $number2;
                $quotient = ($number2 != 0) ? $number1 / $number2 : "undefined (division by zero)";
                
                
                echo "<div class='mt-4'>";
                echo "<h5>Results:</h5>";
                echo "<p><strong>Sum: </strong> $sum</p>";
                echo "<p><strong>Difference: </strong> $difference</p>";
                echo "<p><strong>Product: </strong> $product</p>";
                echo "<p><strong>Quotient: </strong> $quotient</p>";
                echo "</div>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
