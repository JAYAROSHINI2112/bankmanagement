 <?php 

require_once 'connect.php';

if($_POST) {
	$name = $_POST['name'];
	$bname = $_POST['bname'];
	$actno = $_POST['actno'];
	$ifc = $_POST['ifc'];
	$actno = $_POST['actno'];
	$creditamt1 = $_POST['creditamt1'];
	$creditamt2 = $_POST['creditamt2'];

	

	$sql  = "UPDATE creditamt SET name = '$name', bname = '$bname', actno = '$actno', ifc = '$ifc', creditamt ='$creditamt1' + '$creditamt2'  WHERE ifc = {$ifc}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Credited</p>";
		echo "<a href='credit.php?id=".$ifc."'><button type='button'>Back</button></a>";
		echo "<a href='index.html'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>