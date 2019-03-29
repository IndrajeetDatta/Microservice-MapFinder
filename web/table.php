<!DOCTYPE html>
<html>
<head>
	<title> Table</title>
</head>
<body>
	<h1> Saved Places </h1>
	<table align="center">
		<tr>
			<td> Name</td>
			<td> Latitude </td>
			<td> Longitude </td>
		</tr>
		<tr>
			<td> <?php echo $_POST['nameVal'] ?></td>
			<td> <?php echo $_POST['latVal'] ?></td>
			<td> <?php echo $_POST['lngVal'] ?></td>
		</tr>
	</table>
</body>
</html>