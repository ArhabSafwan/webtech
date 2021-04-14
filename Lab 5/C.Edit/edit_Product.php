<?php 

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    require_once ('product_Controller.php');

	$pid = $_GET['id'];
	$product = getProduct($pid);
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form  action="product_Controller.php" method="POST">
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">EDIT PRODUCT</legend>
			<table>
				<tr>
					<td> Name </td>
					<td> : </td>
					<td> <input type="text" name="name" value="<?php echo $product['name'];?>"></td>
				</tr>

				<tr>
					<td> Buying Price </td>
					<td> : </td>
					<td> <input type="text" name="buying_price" value="<?php echo $product['buying_price'];?>"> </td>
				</tr>

				<tr>
					<td> Selling Price </td>
					<td> : </td>
					<td> <input type="text" name="selling_price" value="<?php echo $product['selling_price'];?>"> </td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="display" value="yes"  checked />Display
			<hr>
			<input type="hidden" name="id" value="<?php echo $product["id"]?>" >
			<input type="submit" name="edit_product" value="SAVE">
		</fieldset>
	</form>
</body>
</html>