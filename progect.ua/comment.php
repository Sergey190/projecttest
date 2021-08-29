
 <?PHP 
$server = "localhost"; 
$name_user = "Admin"; 
$password_user = "123456"; 
$db_user = "ua"; 

try 
{ 
$conn = new PDO("mysql:host=$sever;dbname=$db_user", $name_user, $password_user); 

if(empty($_POST['name'])) 
{ 
exit("name"); 
} 
if(empty($_POST['content'])) 
{ 
exit("content"); 
} 

$query = "INSERT INTO massage VALUES (NULL,:names,NOW())"; 
$msg = $conn -> prepare($query);
    
$msg -> execute(['names' => $_POST['name']]); 

$msg_id = $conn -> lastInsertId(); 

$query = "INSERT INTO message_content VALUES(NULL , :content , :message_id)"; 
$msg = $conn -> prepare($query); 
$msg -> execute (['content' => $_POST['content'],'message_id' => $msg_id]); 


} 
catch(PDOException $e) 
{ 
echo "Error" . $e -> getMessage(); 
} 
?>
<?php
require "connect.php";


?>




<!DOCTYPE html>
<html>
<head>
	<title>Проект</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/style.css">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/js.js"></script>
	<meta charset="utf-8">
</head>
<body>
<div
><?php
include("include/header.php");
?> </div>


<?php
include("include/body.php");
?>


<?php
include("include/footer.php");
?>

</body>
</html>