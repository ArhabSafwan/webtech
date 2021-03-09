<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $DOBErr = $genderErr = $DGErr = $BGErr = "";
$name = $email = $DOB = $gender = $DG = $BG = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }
   else {
    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
   else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["DOB"])) {
    $DOBErr = "Must give Date of birth";
  }
   else {
    $DOB = test_input($_POST["DOB"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  }
   else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["DG"])) {
    $DGErr = "Select at least two";
  }
   else {
    $DG = test_input($_POST["DG"]);
  }
  if (empty($_POST["BG"])) {
    $BGErr = "Must Select";
  }
   else {
    $BG = test_input($_POST["BG"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
  <legend><b>Name</b></legend> <input type="text" name="name" value="<?php echo $name;?>"><p>_________________________________</p>
  <span class="error">* <?php echo $nameErr;?></span>
  <input type="submit" name="submit" value="Submit">
</fieldset> 
  <br><br>
  <fieldset>
 <legend><b>E-mail</b></legend> <input type="text" name="email" value="<?php echo $email;?>"><p>_________________________________</p>
  <span class="error">* <?php echo $emailErr;?></span>
  <input type="submit" name="submit" value="Submit">
  </fieldset>
  <br><br>
  <fieldset>
  <legend><b>DATE OF BIRTH</b></legend> <input type="DATE" name="DOB" value="<?php echo $DOB;?>"><p>_________________________________</p>
  <span class="error"><?php echo $DOBErr;?></span>
  <input type="submit" name="submit" value="Submit">
  </fieldset>
  <br><br>
 <fieldset> 
  <legend><b>GENDER</b></legend>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <p>___________________________________________</p>
  
  <input type="submit" name="submit" value="Submit">  </fieldset>
  <br>
  <br>
  <fieldset>
  <legend><b>DEGREE</b></legend>
  <input type="checkbox" id="SSC" name="SSC" value="DG">
  <label for="SSC">SSC</label>
  <input type="checkbox" id="HSC" name="SSC" value="DG">
  <label for="HSC">HSC</label>
  <input type="checkbox" id="HSC" name="HSC" value="DG">
  <label for="BSc">BSc</label>
  <input type="checkbox" id="BSc" name="vehicle3" value="DG">
  <label for="MSc">MSc</label>
  <p>_________________________________</p>
  <span class="error">* <?php echo $DGErr;?></span>
  <input type="submit" name="submit" value="Submit">
  </fieldset>
  <br><br>

  <fieldset>
  <legend><b>BLOOD GROUP</b></legend>
  <span class="error">* <?php echo $BGErr;?></span>
  
<select id="BG">
  <option></option>	
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
  <option value="B+" >B+</option>
  <option value="B-" >B-</option>
  <option value="O+" >O+</option>
  <option value="O-" >O-</option>
  <p>_________________________________</p>
  <input type="submit" name="submit" value="Submit">
</select>
</fieldset>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $DOB;
echo "<br>";
echo $gender;
echo "<br>";
echo $DG;
echo "<br>";
echo $BG;
?>

</body>
</html>