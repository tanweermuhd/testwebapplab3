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

?>
