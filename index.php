<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table style="text-align: center;">
	<form method="post" action="index2.php">
		
		<tr>
			<td>Name</td>
			<td><input type="text" name="name[]"></td>
		</tr>
		<tr>
			<td>SurName</td>
			<td><input type="text" name="surname[]"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city[]"></td>
		</tr>
		<tr>
			<td>Language</td>
			<td><input type="text" name="language[]"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>


		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
		</tr>
	</form>
</table>
</body>
</html>