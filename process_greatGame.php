<?php
session_start();

if(isset($_POST['reset']))
{
	unset($_SESSION['tooLow']);
	unset($_SESSION['tooHigh']);
}

if(isset($_POST['guess']))
{
	// $_SESSION['guess'] = $_POST['guess'];
	if($_POST['guess'] == $_SESSION['number'])
	{
		$_SESSION['correct'] = "<h3 class='green'>You pick " . $_POST['guess'] . ". It's a match</h3>";
	}
	if($_POST['guess'] < $_SESSION['number'])
	{
		$_SESSION['tooLow'] = "<h3 class='red'>You pick " . $_POST['guess'] . ". It's Too Low</h3>";

	}
	if($_POST['guess'] > $_SESSION['number'])
	{
		$_SESSION['tooHigh'] = "<h3 class='red'>You pick " . $_POST['guess'] . ". It's Too High</h3>";
	}

}

header('Location: greatNumGame.php');
?>
