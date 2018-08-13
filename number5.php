<!DOCTYPE html>
<html>
<head>
<body>

<?php //db credentials stored in variables
$servername = "localhost";
$username = "username";
$password ="password";

$conn = new  //testing connection by authentication
mysqli ($servername, $username, $password)

if ($conn ->connect_error) {
    die ("Connection failed:" . $conn ->connect_error);
}
echo "Connected successfully";
?>

</body>
</head>
</html>
