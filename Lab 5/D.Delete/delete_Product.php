<?php 

	require_once ('product_Controller.php');

	$pid = $_GET['id'];
	$product = getProduct($pid);

	if(isset($_POST['delete_product']))
	{
		require_once ('product_Controller.php');
		deleteProduct($pid);
		header('Location:list_Product.php');
	}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>DELETE Product</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form  action="" method="POST">
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">DELETE PRODUCT</legend>
			<table>
				<tr>
					<td> Name </td>
					<td> : </td>
					<td> <?php echo $product['name'];?> </td>
				</tr>

				<tr>
					<td> Buying Price </td>
					<td> : </td>
					<td> <?php echo $product['buying_price'];?> </td>
				</tr>

				<tr>
					<td> Selling Price </td>
					<td> : </td>
					<td> <?php echo $product['selling_price'];?> </td>
				</tr>

				<tr>
					<td> Displayable </td>
					<td> : </td>
					<td> <?php echo $product['yes'];?> </td>
				</tr>
			</table>
			<hr>

			<input type="submit" name="delete_product" value="Delete">
		</fieldset>
	</form>
</body>
</html>