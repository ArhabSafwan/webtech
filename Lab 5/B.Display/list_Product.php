<?php 

	include_once 'product_Controller.php';
	$products = getAllProduct();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<fieldset style="width: 370px">
		<legend style="font-weight: bold;font-size: 18px">DISPLAY</legend>
		<table border=1px style="border-collapse:collapse; border-color: white; text-align: center;">
			<tr>
			<th>#SL</th>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>
			</tr>
			<?php
			$i = 1;
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
				
			?>
		</table>
	</fieldset>
</body>
</html>