<?php
session_start();
?>
<?php
// First let's process all the input
// using constants for the names of the elements in the form would be better...
// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.
$classtype = htmlspecialchars($_POST["classtype"]);
$difficulty = htmlspecialchars($_POST["difficulty"]);
$taken = $_POST["taken"];
$improve = htmlspecialchars($_POST["improve"]);
$_SESSION["classtype"] = $classtype;
$_SESSION["difficulty"] = $difficulty;
$_SESSION["taken"] = $taken;
$_SESSION["improve"] = $improve;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Survey Results | Prove 03 Survey</title>
</head>

<body>
	<h1>Survey Results</h1>

	<p>Would you rather take online classes, campus classes or a combination of the two? <?=$classtype ?><? php echo $_SESSION["classtype"]; ?></p>
	<p>Do you think campus classes or online classes are more difficult? <?=$difficulty ?></a></p>
	<p>What type of classes have you taken before? <?=$taken ?></p>
	<p>What would you like to see improved in online classes the most? <?=$improve ?></p>
	
	Session Variables are:<? print_r($_SESSION); ?>


</body>


</html>