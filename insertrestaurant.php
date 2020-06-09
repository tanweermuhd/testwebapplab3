<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Apu123456", "Database" => "testdbtp045897", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbtp045897.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
