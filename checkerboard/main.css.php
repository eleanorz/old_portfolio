<?php
 
    function gimmeColor()
    {
    	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    	$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    	return $color;
    }

    $red = gimmeColor();
    $black = gimmeColor();
    $button = gimmeColor();

	echo"
	*{
		background-color: black;
		color: white;
		font-family: 'Audiowide', cursive;
	}";

	echo "
		table
		{
			width: 800px;
			height: 800px;
		}
	";

	echo "
		button
		{
			background-color: ".$button.";
			font-size: 20px;
		}
	";
	
	echo "
	.red
	{
		background-color:".$red.";
	}";

	echo "
	.black
	{
		background-color: ".$black.";
	}
	";

 ?>
