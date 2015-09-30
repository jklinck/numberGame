<?php
session_start();
$x='';
$y= 'inline-block';
$z='none';
$styling='';
if(isset($_SESSION['low']))
{
	$x= $_SESSION['low'];
	unset($_SESSION['low']);
	$styling="display:block; background-color:blue; width:200px;
	text-align:center; margin:0 auto; padding-top:80px; height: 100px; color:white;";
}

if(isset($_SESSION['high']))
{
	$x= $_SESSION['high'];
	unset($_SESSION['high']);
	$styling="display:block; background-color:red; width:200px;
	text-align:center; margin:0 auto; padding-top:80px; height: 100px; color:white;";
}

if(isset($_SESSION['correct']))
{
	$x= $_SESSION['correct'];
	unset($_SESSION['correct']);
	$y= 'none';
	$z='inline-block';
	$styling="display:block; background-color:green; width:200px;
	text-align:center; margin:0 auto; padding-top:80px; height: 100px; color:white;";
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Great number game</title>
		<style>
			.center{
				text-align: center;
			}
			.box{
				display: <?php echo $y?>;
			}
			.play{
				display: <?php echo $z?>;
			}
		</style>
	</head>
	<body class='center'>
		<br></br>
		<h3 >Welcome to the Great Number Game!</h3>
		<p>I am thinking of a number between 1 and 100</p><br>
		<p>Take a guess!</p>
		<?php echo "<p style='$styling'>$x</p>";?>
		<form class='center box' action="number_game_process.php" method="post">
			<!-- center and box are two different classes here -->
				<textarea style='margin-top:20px;' name="number"></textarea><br>
				<input style="margin-top:10px"; type="submit">
		</form>
		<form class='center play' action="number_game_process.php" method="post">
			<input type='hidden' name='play'>
			<button style="margin-top:20px">Play again!</button>
		</form>
	</body>
</html>



