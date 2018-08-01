<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$val = $_POST['dat'];
$d = $val -10000;

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed" . $conn->connect_error );
}
$result = $conn->query("SELECT * from chat where timer > $d order by timer desc limit 10 "   );

if($result->num_rows > 0 ){

  while($row  = $result->fetch_assoc()){
    echo "<br>".$row["timer"]."<br>";
    echo $row["user"]."  :  ";
    echo $row["message"]."<br>";

  }
}
?>
