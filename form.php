<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="customerinfo";


$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$date = $_POST['date'];
	$nin = $_POST['nin'];
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$origin = $_POST['origin'];
	$type = $_POST['type'];
	$reason = $_POST['reason'];
	$tel = $_POST['tel'];
	$amount = $_POST['amount'];
	$date2 = $_POST['date2'];
	$dbundle = $_POST['dbundle'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$phone3 = $_POST['phone3'];
	$staffname = $_POST['staffname'];
	$shopname = $_POST['shopname'];



	$sql_query = "INSERT INTO cif (name,date,nin,surname,firstname,email,number,origin,type,reason,tel,amount,date2,dbundle,phone1,phone2,phone3,staffname,shopname) VALUES ('$name','$date','$nin','$surname','$firstname','$email','$number','$origin','$type','$reason','$tel','$amount','$date2','$dbundle','$phone1','$phone2','$phone3','$staffname','$shopname')";

		if (mysqli_query($conn, $sql_query)) {
			echo "Records saved successfully !";
		}
		else
		{
			echo "Error " . $sql . "" .mysqli_error($conn); 
		}
		mysqli_close($conn);
}
?>