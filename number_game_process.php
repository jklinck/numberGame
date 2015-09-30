<?php
session_start();
if(!isset($_SESSION['number'])){
	$_SESSION['number']=rand(1,100);
}
// by doing it this way you keep the number from changing each time the 
// page refreshes, if I just used $_SESSION['number']=rand(1,100); without
// the if(!isset) above the number would change on every single refresh




if(isset($_POST['number']))
{
// if post has an entry for number then do all this code, without the if statement 
// above when the user gets the number correct and hits 'Play again' it will come 
// back to this code and number will not be defined because there was no user 
// input for number (by number this is referring to name='number' in the 
//<textarea> on number_game.php)

// 
	if($_SESSION['number'] > $_POST['number'])
	{
		$_SESSION['low']= 'Too low!';
		//at first I had echo 'Too low!' and it didn't work, this didn't work 
		// because I am re-directing with the header() below, by assigning this 
		// to a variable (like above) I am able to use the variable in a php tag
		// in my html file, and thus never actually print anything on this page
	}

	if($_SESSION['number'] < $_POST['number'])
	{
		$_SESSION['high']= 'Too high!';
	}


	if($_SESSION['number']== $_POST['number'])
	{
		$_SESSION['correct']= ($_SESSION['number']).' was the number!';
	}
}

header("Location: number_game.php");


?>