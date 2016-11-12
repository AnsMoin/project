<HTML> 
<head>
<title> Online Buy BiCycle </title>
</head>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("img_db");
$res= mysql_query("select * from product");
echo "<table border=1>";
    echo "<tr>";
   
    echo "<th>"; echo "id";    echo "</th>";
	 echo "<th>"; echo "image"; echo "</th>";
    echo "<th>"; echo "name";  echo "</th>";
	echo "<th>"; echo "price"; echo "</th>";
    echo "</tr>";
while($row=mysql_fetch_array($res))
{

	echo "<tr>";
	echo "<td>"; echo  $row["id"];       echo "</td>";
	echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
	echo "<td>"; echo  $row["name"];     echo "</td>";  
	echo "<td>"; echo  $row["price"];    echo "</td>";   
	echo "</tr>";	
}
echo "</table>";
?>

</body>
</HTML>