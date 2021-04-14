<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	require_once 'database.php';

	if(isset($_GET['req']) && $_GET['req'] == 'add_product')
	{
		insertProduct();
	}

	elseif(isset($_POST['edit_product']))
	{
		editProduct();
	}

	function getAllProduct()
	{
		$query="SELECT * FROM `products`";
		$products=get($query);
		return $products;
	}

	function getProduct($id)
	{
		$query="SELECT * FROM products WHERE id=$id";
		$product=get($query);
		return $product[0];
	}

	function deleteProduct($id)
	{
		$query="DELETE FROM products WHERE id=$id";
    	$product=get($query);
		return $product[0];	
	}

	function searchProduct($name)
	{
    	$query = "SELECT * FROM `products` WHERE name LIKE '%$name%'";
    	$product=get($query);
    	if($product)
    	{
    		return $product[0];
    	}
    	else
    	{
    		$msg = 'Not Found';
    		return $msg;
    	}
    	
	}

	function insertProduct()
	{
		$name          =$_SESSION['name'];
		$buying_price  =$_SESSION['buying_price'];
		$selling_price =$_SESSION['selling_price'];
		$display       =$_SESSION['display'];

		$query="INSERT INTO products VALUEs(NULL, '$name', '$buying_price', '$selling_price', '$display')";
		execute($query);
		header('Location:add_Product.php');
	}

	function editProduct()
	{
		$id = $_POST['id'];
		$name=$_POST['name'];
		$buying_price=$_POST['buying_price'];
		$selling_price=$_POST['selling_price'];
		
		if($_POST['display'] == 'yes')
		{
			$display = 1;
		}
		else
		{
			$display = 0;
		}

		$query="UPDATE products SET name='$name',buying_price='$buying_price',selling_price='$selling_price',display='$display' WHERE id=$id";
		execute($query);
		header('Location:list_Product.php');
	}
	
 ?>