<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$email="";
$emailerror="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["email"])){
$emailerror="E-mail is required";	
}else{
	$email=test_input($_POST["email"]);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$emailerror="invalid email format";
	}
}}
?>
<h2> PHP form validation of email</h2>
<p><span class="error">* required field.</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	E-mail: <input type="text" name="email">
	<span class="error">*<?php echo $emailerror;?></span>
<br><input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>