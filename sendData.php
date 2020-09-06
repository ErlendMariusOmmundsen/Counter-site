

<h1>

<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE thor SET amount=amount+1";

if ($conn->query($sql) === TRUE) {
    //echo "Takk, for oppdateringen.";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();

header( "refresh:0;url=index.php");
 ?>

<!---</h1>
<img src="" alt="asd">
<audio autoplay src=""></audio>
--->
