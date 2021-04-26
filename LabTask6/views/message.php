<?php include_once('session_user.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>All Message List</title>
	<?php include_once('bootstrap.php'); ?>
</head>
<body>
	<?php include_once('header.php'); ?>

	<section class="col-md-8 pt-5 pb-5">
		<h1 class="text-center pt-2">ALL MESSAGE LIST</h1>
		<div class="table-responsive">
			<table class="table text-center table-sm table-striped table-hover">
			  <thead class="table-dark">
			    <tr>
					<th scope="col">#SL</th>
			        <th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Message</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php

					$i = 0;
					foreach($messages as $message)
					{
						$id      		= $message["id"];
						$name    		= $message["name"];
						$email   		= $message["email"];
						$message 		= $message["message"];
						$i++;
					?>
					
				<tr>
					<td><?php echo $i ; ?></td>
					<td><?php echo $name ; ?></td>
					<td><?php echo $email ; ?></td>
					<td><?php echo $message ; ?></td>
				</tr>
	         <?php
	     			}
				?>
			  </tbody>
			</table>
		</div>
    </section>
</main>

	<?php include_once('javascript.php'); ?>
    <?php include_once('index_footer.php'); ?>
	
</body>
</html>