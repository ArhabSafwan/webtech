<?php 

	include_once 'product_Controller.php';
	$products = getAllProduct();

	$searchedProduct='';

	if (isset($_POST['findProduct']))
	{
		$name = $_POST['name'];

    	include_once 'product_Controller.php';
    	$searchedProduct = searchProduct($name);
    	    	
	}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Product Search</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<fieldset style="width: 370px">
		<legend style="font-weight: bold;font-size: 18px">SEARCH PRODUCT</legend>
		<form method="POST" action="">
		      <input type="text" name="name" placeholder="Searching..." required/>
		      <input type="submit" name="findProduct" value="Search By Name"/>
		    </form>
			<hr>
		<table border=1px style="border-collapse:collapse; border-color: white; text-align: center;">
			<tr>
				<th>#SL</th>
				<th>Name</th>
				<th>Profit</th>
				<th>Action</th>
			</tr>
			<?php
			$i=1;

				if($searchedProduct)
				{
					if($searchedProduct === 'Not Found')
					{
						echo "Not Found";
					}
					else
					{
						echo "<tr>";
						echo "<td>"."&nbsp;&nbsp;".$i++."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".$searchedProduct["name"]."&nbsp;&nbsp;"."</td>";
						echo "<td>"."&nbsp;&nbsp;".($searchedProduct["selling_price"] - $searchedProduct["buying_price"])."&nbsp;&nbsp;"."</td>";
						echo '<td class="bg"><a href="edit_Product.php?id='.$searchedProduct["id"].'" class="btn">Edit</a> | <a href="delete_Product.php?id='.$searchedProduct["id"].'" class="btn">DELETE</a></td>';
						echo "</tr>";
					}
				}
				else
				{
					foreach($products as $product)
					{
						if($product["display"] == 1)
						{
							echo "<tr>";
							echo "<td>"."&nbsp;&nbsp;".$i++."&nbsp;&nbsp;"."</td>";
							echo "<td>"."&nbsp;&nbsp;".$product["name"]."&nbsp;&nbsp;"."</td>";
							echo "<td>"."&nbsp;&nbsp;".($product["selling_price"] - $product["buying_price"])."&nbsp;&nbsp;"."</td>";
							echo '<td class="bg"><a href="edit_Product.php?id='.$product["id"].'" class="btn">Edit</a> | <a href="delete_Product.php?id='.$product["id"].'" class="btn">DELETE</a></td>';
							echo "</tr>";
						}
					}
				}
			?>
		</table>
	</fieldset>
</body>
</html>