<!DOCTYPE html>
<html>
<body>
	<?php
$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73,
 68, 62, 73, 72,65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
echo"<br>";
sort($temp_array);
echo "lowest temperatures :";
 
echo $temp_array[0]." ";
echo"<br>";

echo "highest temperatures :";

echo $temp_array[$temp_array_length-1]."";
echo"<br>";
?>	
</body>
</html>