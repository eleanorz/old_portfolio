<?php 

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

?>