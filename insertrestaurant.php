<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Apu123456", "Database" => "testdbtp045897", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbtp045897.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
die ("Error connection: ".sqlsrv_errors());
}
echo "DB conneted!";

$tsql = "INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?)";
$params = array ("Burger King", "Bukit Jalil", "03-11223344");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
  die( print_r( sqlsrv_errors(), true));
}

?>
