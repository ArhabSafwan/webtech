<?php
if(count($_POST)>0) {
/* Validation to ensure all fields are non-empty */
foreach($_POST as $key=>$value) {
if(empty($_POST[$key])) {
$message = ucwords($key) . " field is required";
break;
}
}





/* Validation to ensure about if the checkbox is checked or not */
if(!isset($message)) {
if(!isset($_POST["terms"])) {
$message = " Check the box to accept Terms and conditions";
}
}

if(!isset($message)) {
$message = "You have registered successfully!";	
unset($_POST);
}

}
?>
<html>
<head>

<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmRegistration" method="post" action="">
<div align="center" class="message"><?php if(isset($message)) echo $message; ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">

</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></td>
</tr>
<tr class="tablerow">
<td aling="right">
​ <td>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle2"> Remember me</label>
  </td>
 
</tr>
 

<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>
