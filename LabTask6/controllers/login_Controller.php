
<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

	require_once '../model/database.php';

	function getAllUser()
	{
		$query="SELECT * FROM `login`";
		$users=get($query);
		return $users;
	}

	function getUser($uname)
	{
		$query="SELECT * FROM `login` WHERE uname = '$uname'";
		$user=get($query);
		return $user[0];
	}

	function deleteUser($uname)
	{
		$query = "DELETE FROM `login` WHERE uname = '$uname'";
    	$user = get($query);
		return $user[0];	
	}	
 ?>