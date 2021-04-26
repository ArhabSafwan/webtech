<?php 
    
    include_once('session_user.php');
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php include_once('header.php'); ?>
	<?php include_once('bootstrap.php'); ?>

	<section class="col-md-8">
                <form  action="" method="POST" style="padding-top: 30px;">
					<fieldset style="width: 370px; margin: auto; align-self: center;">
						<legend style="font-weight: bold;font-size: 18px">PROFILE</legend>
						<table>
							<tr>
								<td> Name </td>
								<td> : </td>
								<td> <?php echo $_SESSION['name']; ?> </td>
								<td rowspan="4"><img src="default.png"></td>
							</tr>
							<tr>
								<td> Email </td>
								<td> : </td>
								<td> <?php echo $_SESSION['email']; ?> </td>
								<td></td>
							</tr>
							<tr>
								<td> Address </td>
								<td> : </td>
								<td> <?php echo $_SESSION['address']; ?> </td>
								<td></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td> : </td>
								<td> <?php echo $_SESSION['gender']; ?> </td>
								<td></td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td> : </td>
								<td> <?php echo $_SESSION['date']; ?> </td>
								<td></td>
							</tr>
						</table>
					</fieldset>
				</form>
            </section>
        </main>

        <?php include_once('javascript.php'); ?>
        <?php include_once('index_footer.php'); ?>
	
</body>
</html>