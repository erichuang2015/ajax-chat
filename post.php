<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$msg = $_POST['message'];
$nm = $_POST['name'];
$tm = $_POST['time'];
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed" . $conn->connect_error );
}
$result = $conn->query("INSERT INTO chat (timer,user,message)
VALUES ('$tm','$nm','$msg');
");
if($result){
  echo "string";

}
else{
  echo "error";
  echo $msg . $nm . $tm;
}
?>
