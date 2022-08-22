<?php 
include('connect1.php');

extract($_POST);

if (isset($_POST['submit'])) {
	$q = "insert into thapaajaxinsert (username, password) values ('$username', '$password')";

	$query = mysqli_query($conn, $q);
	header('location:insert.php');
}
?>