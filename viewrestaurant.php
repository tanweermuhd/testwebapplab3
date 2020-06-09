<?php
$serverName= "testdbtp045897.database.windows.nett";

$connectionOptions = array (
"Database" => "testdbtp045897",
"Uid" => "apuadmin",
"PWD" => "Apu123456");
 

//establishes the connection

$conn = sqlsrv_connect($serverName, $connectionOptions);
if(!$conn)
{
die ("Error connection: ".sqlsrv_errors());
}
echo "DB conneted!";

?>
