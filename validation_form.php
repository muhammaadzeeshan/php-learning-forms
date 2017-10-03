<!DOCTYPE htmle>
<!DOCTYPE html>
<html>
<head>
	<title> PHP Form Validation</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h1>Validation In Form</h1>
<font color="red">*reuired field.</font><br><br>
Name: <input type="text" name="name"><font color="red">*</font><br><br><br>
E-mail: <input type="text" name="email"><font color="red">*</font><br><br>
Website: <input type="text" name="website"><br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
Gender<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male<br><br>
<input type="submit">
</form>
<h1>Your Input </h1>

</body>
</html>