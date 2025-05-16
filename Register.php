<!-- first create database on xamp call it complainant and a table call it user -->
<!-- copy this php code then create a new file call it register.php on htdoc on xamp -->
<?php
$connect = mysqli_connect("localhost", "root", "","complainant") or die("Could not connect to server!"); mysqli_select_db($connect, "php_forum") or die("Could not connect to database!"); 
$fullname = $_POST['name'];
$address = $_POST['address']
$contact = $_POST['contact']
$apealform = $_POST['apeal']

   if(isset($_POST["submit"])){ if($query = mysqli_query("INSERT INTO users ('name', 'address', 'contact', 'apeal') VALUES('".$fullname."', '".$address."', '".$contact."', '".$apealform."')")){ echo "Success"; }else{ echo "Failure" . mysql_error(); } }
?>
