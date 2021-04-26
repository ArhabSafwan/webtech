<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	require_once '../model/database.php';

	if(isset($_GET['req']) && $_GET['req'] == 'add_customer')
	{
		insertCustomer();
	}

	elseif(isset($_POST['edit_customer']))
	{
		editCustomer();
	}

	elseif(isset($_GET['req']) && $_GET['req'] == 'add_local_customer')
	{
		insertLocalCustomer();
	}

	function getAllCustomer()
	{
		$query     = "SELECT * FROM `customer` order by id desc";
		$customers = get($query);
		return $customers;
	}

	function getCustomer($id)
	{
		$query   = "SELECT * FROM customer WHERE id=$id";
		$customer = get($query);
		return $customer[0];
	}

	function deleteCustomer($id)
	{
		$query   = "DELETE FROM customer WHERE id=$id";
    	$customer = get($query);
		return $customer[0];	
	}

	function insertCustomer()
	{
		$name      = $_SESSION['name'];
		$email     = $_SESSION['email'];
		$uname     = $_SESSION['uname'];
		$address   = $_SESSION['address'];
		$password  = $_SESSION['password'];
		$gender    = $_SESSION['gender'];
		$b_date    = $_SESSION['b_date'];
		$img       = $_SESSION['img'];
		$user_type = 'customer';
		$status    = $_SESSION['status'];

		$query  = "INSERT INTO customer VALUEs(NULL, '$name', '$email', '$uname', '$address', '$b_date', '$gender', '$img')";
		$query2 = "INSERT INTO login VALUEs(NULL, '$name', '$uname', '$password', '$user_type', '$status')";

		execute($query);
		execute($query2);

		header("Location:../views/list_customer.php");
	}

	function insertLocalCustomer()
	{
		$name      = $_SESSION['name'];
		$email     = $_SESSION['email'];
		$uname     = $_SESSION['uname'];
		$address   = $_SESSION['address'];
		$password  = $_SESSION['password'];
		$gender    = $_SESSION['gender'];
		$b_date    = $_SESSION['b_date'];
		$img       = $_SESSION['img'];
		$user_type = 'customer';
		$status    = $_SESSION['status'];

		$query  = "INSERT INTO customer VALUEs(NULL, '$name', '$email', '$uname', '$address', '$b_date', '$gender', '$img')";
		$query2 = "INSERT INTO login VALUEs(NULL, '$name', '$uname', '$password', '$user_type', '$status')";

		execute($query);
		execute($query2);

		header("Location:../views/login.php");
	}

	function editCustomer()
	{
		$img         = $_POST["prev_image"];
		$id          = $_POST['id'];
		$name        = $_POST['name'];
		$email       = $_POST['email'];
		$gender      = $_POST['gender'];
		$b_date      = $_POST['b_date'];
		$address     = $_POST['address'];	

		$u_id        = $_POST['u_id'];
		$uname       = $_POST['uname'];
		$password    = $_POST['password'];	
		$user_type   = 'customer';
		$status      = $_POST['status'];

		if(file_exists($_FILES['img']['tmp_name']) || is_uploaded_file($_FILES['img']['tmp_name'])) 
		{
			$target_dir  = "../storage/customer_image/";
			$target_file = $target_dir . basename($_FILES["img"]["name"]);
			move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
			$img = $target_file;
		}

		$query  = "UPDATE customer SET name='$name', email='$email', uname='$uname', address='$address', b_date='$b_date', gender='$gender', img='$img' WHERE id=$id";
		$query2 = "UPDATE login SET name='$name', uname='$uname', password='$password', user_type='$user_type', status='$status' WHERE id=$u_id ";

		execute($query);
		execute($query2);

		header("Location:../views/list_customer.php");
	}

	
 ?>