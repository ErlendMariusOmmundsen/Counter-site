<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Counter</title>
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript">
    function add_n_show(){
      var result = document.getElementById("counter_object");

    }
  </script>
</head>

<body>
  <br><br><br><br><br><br><br><br>
  <a  id="btn" href="sendData.php" class="button">
    <span>Click here</span>
  </a>
  <h1 style="font-size: 250px;">
      <?php
      $servername = "";
      $username = "";
      $password = "";
      $dbname = "";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT 1, amount FROM thor";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo $row["amount"];
          }
      } else {
          echo "0 results";
      }

      ?>
  </h1>


</body>
</html>
