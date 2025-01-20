<?php
// What does this all mean??
// Thank you Ctrl+V and Ctrl+P
// I hate PHP
// Cannot use JS with MySQL 'cause of security issues. Stupid Javascript >:(
		// 'Free MySQL hosting provider' google search go brrrrrrrrrrrrr

$uri = "mysql://avnadmin:AVNS_bD3lN1J7_zJgKPz6zGU@accountbackend-msql-accountserver.i.aivencloud.com:13743/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
  $db = new PDO($conn, $fields["user"], $fields["pass"]);

  $stmt = $db->query("SELECT VERSION()");
  print($stmt->fetch()[0]);
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
