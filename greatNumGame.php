<?php
session_start();
// session_destroy();
if(!isset($_SESSION['number'])){
	$_SESSION['number'] = rand(1,100);
}


// var_dump($_SESSION['number']);

?>
<html>
<head>
	<title>Great</title>
<style>
input, label{
	display: block;
	padding: 5px;
}
label, input, textarea, option, select{
	width: 200px;
	margin: 5px;
}
.red{
	color: #fff;
	width: 250px;
	height: 100px;
	background: red;
	padding: 30px;
}
.green{
	color: #fff;
	width: 250px;
	height: 100px;
	background: green;
	padding: 30px;
}	
</style>

</head>
<body>
	<h1>Welcome to the Great Number Games!</h1>
	<p>
	I am thinking of a number between 1 and 100<br>
	Take a guess!
</p>
<?php
if(isset($_SESSION['tooLow']))
{
	echo $_SESSION['tooLow'];
	unset($_SESSION['tooLow']);
}
?>
<?php
if(isset($_SESSION['tooHigh']))
{
	echo $_SESSION['tooHigh'];
	unset($_SESSION['tooHigh']);
}
?>
<?php
if(isset($_SESSION['correct']))
{
	echo $_SESSION['correct'];
	echo "<form action='greatNumGame.php' method='post'>
		<input type='submit' value='Play Again'>
		</form>";
	unset($_SESSION['correct']);
}
?>
	<form action="process_greatGame.php" method="post">
		<input type="text" name="guess" value="">
		<input type="submit" value="Submit">
	</form>
</body>
</html>