<html>
<meta charset="utf-8">
<body>
	<form action="processorder.php" method="post">
		<table border="0">
			<tr bgcolor="#cccccc">
				<td align="center" width="150">Item</td>
				<td align="center" width="150">Quantity</td>
			</tr>
			<tr>
				<td>Tires</td>
				<td align="center"><input type="text" name="tireqty" size="3" maxlength="3" /></td>
			</tr>
			<tr>
				<td>Oil</td>
				<td align="center"><input type="text" name="oilqty" size="3" maxlength="3" /></td>
			</tr>
			<tr>
				<td>Spark Plugs</td>
				<td align="center"><input type="text" name="sparkqty" size="3" maxlength="3" /></td>
			</tr>
			<tr>
				<td>Address</td>
				<td align="left"><input type="text" name="address" size="12" maxlength="20" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Submit Order" /></td>
			</tr>
		</table>
	</form>	
 
</body>
</html>
