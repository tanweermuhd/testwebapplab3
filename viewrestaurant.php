<?php
/*
$serverName= "testdbtp045897.database.windows.nett";

$connectionOptions = array (
"Database" => "testdbtp045897",
"Uid" => "apuadmin",
"PWD" => "Apu123456");
 

//establishes the connection

$conn = sqlsrv_connect($serverName, $connectionOptions); */
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Apu123456", "Database" => "testdbtp045897", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbtp045897.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn)
{
die ("Error connection: ".sqlsrv_errors());
}
echo "DB conneted!";

$tsql = "select * FROM [dbo].[restaurant]";
$getResults= sqlsrv_query($conn, $tsql);
if ($getResults == FALSE)
{
 die (sqlsrv_errors());
}
echo "<table border ='1'>";

while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
 echo "<tr>";
 echo "<tr>". $row['restaurant_id'] . "</td>";
 echo "<tr>". $row['restaurant_name'] . "</td>";
 echo "<tr>". $row['restaurant_address'] . "</td>";
 echo "<tr>". $row['restaurant_phone'] . "</td>";
 echo "<tr>";
}
echo "</table>";
sqlsrv_free_stmt($getResults);


?>
