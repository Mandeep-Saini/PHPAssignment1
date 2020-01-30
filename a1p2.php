<!doctype html>
<!-- Mandeep Saini 8621039-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post" action="a1p2.php">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php if (isset($_POST["firstname"])) echo $_POST["firstname"]; ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></label></p>
	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>
</body>
</html>
    <?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$first=$_POST["firstname"];
    $last=$_POST["lastname"];
	$age=$_POST["age"];
	if(empty($first) || empty($last) || empty($age) )
	{
		echo "Enter all the fields"; 
   }
    else
    {
		if (!is_numeric($age)) {
			echo "Age should be a number";
	   }
	   
	   else{
		echo "submitted successfully";
		echo " The Details are:<p>First Name:$first </p> <p>Last Name:$last </p> <p>Age:$age </p>";
	}
	}


}

    
    
    ?>
    

