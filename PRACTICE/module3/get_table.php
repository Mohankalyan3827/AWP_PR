<?php
$num = $_GET["num"];
echo "<table>";
for ($i = 1; $i <= $num; $i++) {
  echo "<tr><td>$i</td><td>" . $i*$i . "</td></tr>";
}
echo "</table>";
?>