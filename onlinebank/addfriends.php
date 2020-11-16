<!DOCTYPE html>
<html>
<head>
	<title>Add | FRIENDSr</title>

	<style type="text/css">
		body{
			margin: 0;
			font-family: sans-serif;
			background :url("addfrds.jpg");
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
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<?php 

?>

<fieldset>
	<legend>ADD FRIENDS</legend>

	<form action="creditinsert.php" method="post">
		<table cellspacing="0" cellpadding="0" class="content-table">
			<thead>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" placeholder="Name" /></td>
			</tr>
			<tr>
				<th>BANK NO</th>
				<td><input type="text" name="bname" placeholder="BankName" /></td>
			</tr>
			<tr>
				<th>ACCOUNT NO</th>
				<td><input type="text" name="actno" placeholder="Account_no" /></td>
			</tr>
			
			<tr>
				<th>IFC CODE</th>
				<td><input type="text" name="ifc" placeholder="IFC-CODE" /></td>
			</tr>
			<tr>
				<th>CONTACT NO</th>
				<td><input type="text" name="contactno" placeholder="CONTACT NO" /></td>
			</tr>
			<tr>
				<th>AMOUNT</th>
 				<td><input type="text" name="creditamt" placeholder="ENTER AMOUNT" /></td>
			</tr>
			<tr>
				<td><button class='btn btn-'type="submit">SAVE</button></td>
				<td><a href="index.html"><button  type="button" class="btn btn-danger">Back</button></a></td>
			</tr>
		</thead>
		</table>
	</form>

</fieldset>

</body>
</html>