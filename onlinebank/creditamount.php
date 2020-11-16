<?php 

require_once 'connect.php';

if($_GET['ifc']) {
	$ifc = $_GET['ifc'];

	$sql = "SELECT * FROM creditamt WHERE ifc = {$ifc}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		body{
			margin: 0;
			font-family: sans-serif;
			background :url("bg1.jpg");
			background-size:cover;
		}

		.content-table{
			border-collapse: collapse; 
			margin : 25px 0;
			font-size: 0.9em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0,0,0,0.15);
			}
			.content-table thead tr{
				background-color: #000;
				opacity: 0.7;
				color: #fff;
				text-align: left;
				font-weight:bold;
			}
			.content-table th,
			.content-table td{
				padding: 12px 15px;
			}
		  input[type=text]{
			width:100%;
			border:2px solid #fff;
			border-radius: 4px;
			margin:8px 0;
			outline: none;
			padding: 4px;
			box-sizing: border-box;
			transition: .3s;

		}
		input[type=text]:focus{
			border-color: dodgerblue;
			box-shadow: 0 0 18px 0 dodgerblue;
		}	

		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
			
			padding-left: 100px;
		}

		table tr th {
			padding-top: 20px;
			
			font-size:20px;
			
		}
		th{
			text-align: left;
		}
		table td{
			color:#ffff;
			padding: 10px;
			
		}
		.tabel{
			
		}
	</style>

</head>
<body>

<fieldset>
	

	<form action="update.php" method="post">
		<div class="tabel">
		<table  cellpadding="0" class="content-table">
			<thead>
			<tr>
				<th> Name</th>
				<td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
			</tr>		
			<tr>
				<th>BANK NAME</th>
				<td><input type="text" name="bname" placeholder="Bank Name" value="<?php echo $data['bname'] ?>" /></td>
			</tr>
			<tr>
				<th>ACCOUNT NO</th>
				<td><input type="text" name="actno" placeholder="Account no" value="<?php echo $data['actno'] ?>" /></td>
			</tr>
			<tr>
				<th>IFC CODE</th>
				<td><input type="text" name="ifc" placeholder="IFC" value="<?php echo $data['ifc'] ?>" /></td>
			</tr>
			<tr>
				<th>ALREADY CREDITED AMOUNT</th>
				<td><input type="text" name="creditamt1" placeholder="credit amount" value="<?php echo $data['creditamt'] ?>" /></td>
			</tr>
			<th>ENTER THE CREDIT AMOUNT</th>
				<td><input type="text" name="creditamt2" placeholder="credit2 amount"/></td>
			</tr>
			<tr>
				<input type="hidden" name="ifc" value="<?php echo $data['ifc']?>" />
				<td><button class="btn btn-primary" type="submit">CREDIT</button></td>
				<td><a href="index.html"><button class="btn btn-danger" type="button">Back</button></a></td>
			</tr>
		</thead>
		</div>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>