<?php
$data = File("example3.csv");

echo "<h2 style='text-align:center'><i>текст</i></h2>";
echo "<table style='margin:0 auto;width: 100%;
margin-bottom: 20px;
border: 1px solid #000000;border-collapse: collapse;
'><tr>";

$dat_arr =  explode(";", $data[0]);

for ($p = 0; $p < count($dat_arr); $p++) {
   echo  "<td style='background-color:white;text-align:center;border: 1px solid #000000;'>  $dat_arr[$p]</td>";
}
echo "</tr>";
for ($i = 1; $i < count($data); $i++) {
   $data_array = explode(";", $data[$i]);
   echo "<tr>";
   for ($f = 0; $f < count($data_array); $f++) {
      echo  "<td style='background-color:white;text-align:center;border: 1px solid #000000;'>$data_array[$f]</td>";
   }
   echo "</tr>";
}
echo "</table>";
