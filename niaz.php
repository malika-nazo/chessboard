<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table style="border-collapse: collapse;">
			<?php
			$array = array("","a","b","c","d","e","f","g","h");
			$sum = 8;
			for ($i=8; $i >= 1 ; $i--) {
				echo "<tr>";
				echo "<td>$sum</td>";
				$sum--;
				for ($y=1; $y <= 8 ; $y++) { 
					
					$total=$i+$y;
					if ($total %2==0) {
					echo "<td style=\"border: 2px solid black;width: 30px; color:red; height : 30px; background: #000\">$array[$y]$i</td>";
						
					}else{
					echo "<td style=\"border: 2px solid black;width: 30px;  height : 30px; background: #fff\">$array[$y]$i</td>";
					}
				}
				echo "</tr>";
			}
			echo "<tr>";
                for($alphabet = 0; $alphabet<= 8; $alphabet++)
                {
                    echo "<td>$array[$alphabet]</td>";
                } 
        	echo "</tr>"; 		
			?>
		</table>
</body>
</html>