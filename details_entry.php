<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="cassino";


$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm_Password = $_POST['Confirm_Password'];
$Aadhar_Card = $_POST['Aadhar_Card'];

$sql_query = "INSERT INTO entry_details2 (Email,Password,Confirm_Password,Aadhar_Card)
VALUES ('$Email','$Password','$Confirm_Password','$Aadhar_Card')";

if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry Inserted Successfully !";
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>