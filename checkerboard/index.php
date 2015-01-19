<html>
<body>

	<h1>Random Chess Board Generator</h1>

	<form>
		<button>make me new colors! </button>
	</form>


<?php 

function make_table()
{
	echo "<table>";
	for ($i=0; $i < 8; $i++)
	{ 
		echo "<tr>";
		for ($j=0; $j < 8; $j++)
		{ 
			$k = ($i + $j)%2;
			if ($k ==1)
			{		
				echo "<td class = 'red'></td>";
			}
			else
			{		
				echo "<td class = 'black'></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}
	

?>

<div id = 'new_table'>
	<?php 
		make_table();
	 ?>
</div>



</body>
<head>
	<title>Random Chess Generator</title>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="main.css.php" type='text/css'>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js" ></script>

	<script>
		$(document).ready(function(){

		  $("button").click(function(){
		    $("table").fadeOut(100);
		    $().load('make_table.php');
		     });
		});

	</script>

</head>
</html>