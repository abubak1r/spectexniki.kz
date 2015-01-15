<div id="footer2">
<h2>Заказ Спецтехники в городах</h2>
<?php 		
		$r1 = mysql_query('SELECT * FROM region WHERE r_id=1 ORDER BY title');
    	$m1 = mysql_fetch_array($r1); 

    	$r2 = mysql_query('SELECT * FROM region WHERE r_id=2 ORDER BY title');
    	$m2 = mysql_fetch_array($r2); 

     	$r3 = mysql_query('SELECT * FROM region WHERE r_id=3 ORDER BY title');
    	$m3 = mysql_fetch_array($r3); 

    	$r4 = mysql_query('SELECT * FROM region WHERE r_id=4 ORDER BY title');
    	$m4 = mysql_fetch_array($r4); 

echo <<<END
<style type="text/css">
a:link { color: blue; text-decoration: none; }
a:visited { color: blue; text-decoration: none; }
a:hover { color: black; text-decoration: underline; }
a:active { color: red; text-decoration: underline; }
</style>
END;

echo "<table border='0' align='' cellpadding='8px'><tr>";

print "<td>";
do{
	printf("<a href='region.php?%s'>%s</a> (%s) <br />",$m1["id"],$m1["title"],$m1["count"]);
}while($m1 = mysql_fetch_array($r1)); 
print "</td>";

print "<td>";
do{
	printf("<a href='region.php?%s'>%s</a> (%s) <br />",$m2["id"],$m2["title"],$m2["count"]);
}while($m2 = mysql_fetch_array($r2)); 
print "</td>";

print "<td>";
do{
	  printf("<a href='region.php?%s'>%s</a> (%s) <br />",$m3["id"],$m3["title"],$m3["count"]);
}while($m3 = mysql_fetch_array($r3)); 
print "</td>";

print "<td>";
do{
	  printf("<a href='region.php?%s'>%s</a> (%s) <br />",$m4["id"],$m4["title"],$m4["count"]);
}while($m4 = mysql_fetch_array($r4)); 
print "</td>";

echo "</tr></table>";

?>
</div>