<?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$bname = $_POST['bname'];
	$actno = $_POST['actno'];
	$ifc = $_POST['ifc'];
	$contactno = $_POST['contactno'];
	$creditamt = $_POST['creditamt'];

	$sql = "INSERT INTO creditamt (name, bname,actno, ifc,contactno,creditamt) VALUES ('$name',  '$bname', '$actno','$ifc','$contactno','$creditamt')";
	if($connect->query($sql) === TRUE) {
		echo "<p>YOUR FRIEND IS ADDED</p>";
		echo "<a href='credit.php'><button class='btn btn-primary'type='button'>Back</button></a>";
		echo "<a href='index.html'><button class = 'btn btn-warning' type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>