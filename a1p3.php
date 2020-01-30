<!doctype html>
<!-- Mandeep Saini 8621039-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>
<?php 
if(!empty($_POST["firstname"]))
{ 
$string = $_POST["firstname"];
$count;  
$result;
for($i = 0; $i < strlen($string); $i++) {  
    $count = 1;  
    for($j = $i+1; $j < strlen($string); $j++) {  
        if($string[$i] == $string[$j] && $string[$i] != ' ') {  
            $count++;  
            $string[$j] = '0';  
        }  
    }  
    if($count > 1 && $string[$i] != '0'){
       $result=1;
        break; 
	}
	else{
		$result=0;
	}  
}
if($result==1)
{
	echo " characters are repeated";
} 
else{
	echo " no characters repeated";
}
} 
?>  
