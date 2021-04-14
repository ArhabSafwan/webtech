<?php 

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include_once 'product_Controller.php';
	$products = getAllProduct();

	$name='';
	$err_name='';
	$buying_price='';
	$err_buying_price='';
	$selling_price='';
	$err_selling_price='';
	$has_error=false;

	if(isset($_POST['submit']))
	{
		if(empty($_POST['name']))
		{
			$err_name="Name Required";
			$has_error=true;
		}
		else
		{	
			foreach($products as $product)
			{
				$d_name = $product["name"];
				if($d_name == $_POST['name'])
				{
					$err_name="Product Name Should be Unique";
					$has_error=true;
					$name=htmlspecialchars($_POST['name']);
				}
				else
				{
					$name=htmlspecialchars($_POST['name']);
					$_SESSION['name']=$name;
				}
			}
		}
		if(empty($_POST['buying_price']))
		{
			$err_buying_price="Buying Price Required";
			$has_error=true;
		}
		else
		{
			if(! preg_match("/^[0-9]*$/", $_POST['buying_price']))
			{
				$err_buying_price="You Can Input Only Integer Value";
				$has_error=true;
				$buying_price=htmlspecialchars($_POST['buying_price']);
			}
			else
			{
				$buying_price=htmlspecialchars($_POST['buying_price']);
				$_SESSION['buying_price']=$buying_price;
			}			
		}
		if(empty($_POST['selling_price']))
		{
			$err_selling_price="Selling Price Required";
			$has_error=true;
		}
		else
		{
			if(! preg_match("/^[0-9]*$/", $_POST['selling_price']))
			{
				$err_selling_price="You Can Input Only Integer Value";
				$has_error=true;
				$selling_price=htmlspecialchars($_POST['selling_price']);
			}
			else
			{
				$selling_price=htmlspecialchars($_POST['selling_price']);
				$_SESSION['selling_price']=$selling_price;
			}		
			
		}

		if($_POST['display'] == 'yes')
		{
			$_SESSION['display'] = 1;
		}
		else
		{
			$_SESSION['display'] = 0;
		}

		if(!$has_error)
		{
			header("Location:product_Controller.php?req=add_product");
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form  action="" method="POST">
		<fieldset style="width: 370px">
			<legend style="font-weight: bold;font-size: 18px">ADD PRODUCT</legend>
			<table>
				<tr>
					<td> Name </td>
					<td> : </td>
					<td> <input type="text" name="name" value="<?php echo $name;?>"> <br><span style="color:red"><?php echo $err_name;?></span> </td>
				</tr>

				<tr>
					<td> Buying Price </td>
					<td> : </td>
					<td> <input type="text" name="buying_price" value="<?php echo $buying_price;?>"> <br><span style="color:red"><?php echo $err_buying_price;?></span> </td>
				</tr>

				<tr>
					<td> Selling Price </td>
					<td> : </td>
					<td> <input type="text" name="selling_price" value="<?php echo $selling_price;?>"> <br><span style="color:red"><?php echo $err_selling_price;?></span> </td>
				</tr>
			</table>
			<hr>
			<input type="checkbox" name="display" value="yes" />Display
			<hr>
			<input type="submit" name="submit" value="SAVE">
		</fieldset>
	</form>
</body>
</html>