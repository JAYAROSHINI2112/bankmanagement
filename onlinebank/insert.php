<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$bname = $_POST['bname'];
	$actno = $_POST['actno'];
	$ifc = $_POST['ifc'];
	$contactno = $_POST['contactno'];
	$creditamt = $_POST['creditamt'];

	$sql = "INSERT INTO credit (name, bname,actno, ifc,contactno,creditamt) VALUES ('$name',  '$bname', '$actno','$ifc','$contactno','$creditamt')";
	if($connect->query($sql) === TRUE) {
		echo "<p>YOU AMOUNT IS CREDITED</p>";
		echo "<a href='credit.php'><button type='button'>Back</button></a>";
		echo "<a href='index.html'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>