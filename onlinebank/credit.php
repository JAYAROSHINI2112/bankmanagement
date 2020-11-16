<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>FUND | TRANSFER</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style type="text/css">
		body{
			background-image: url('creditamount.jpg');
			background-size: cover;
			opacity: 0.8;
		}
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>

<div class="manageMember">
	<a href="addfriends.php"><button class='btn btn-primary' type="button">Add FRIENDS</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Name</th>
				<th>BANK Name</th>
				<th>ACCOUNT NO</th>
				<th>IFC CODE</th>
				<th>Amount</th>
				<th>TRANSFER<th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM creditamt WHERE ifc > 0";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['name']."</td>
						<td>".$row['bname']."</td>
						<td>".$row['actno']."</td>
						<td>".$row['ifc']."</td>
						<td>".$row['creditamt']."</td>
						<td>
							<a href='creditamount.php?ifc=".$row['ifc']."'><button class ='btn btn-danger' type='button'>CREDIT</button></a>
							</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>