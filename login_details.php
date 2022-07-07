<?php
echo"saket";
session_start();
//header("login_details.php");

$con = mysqli_connect("localhost","root","","try");
mysqli_select_db($con,'try');
$name = $_POST['usrnm'];
$pass = $_POST['psw'];
$s = " select * from logtable where name = '$name'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

/*if($num = 1){
	echo" Username Already taken";*/
//}else{
	$reg = " insert into logtable(Username , Password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";
//}
?>
Thankyou for Registering...!