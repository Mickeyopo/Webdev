<?php
// Create PHP constants to enable connection to the MySQL database

// Define constants 
define("HOSTNAME", "localhost");
define("HOSTUSER", "root");
define("HOSTPASS", "");
define("DBNAME", "webapp");

// Create a connection to the MySQL database
$connection = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected successfully";

// Your further database operations can go here

// Close the connection when done
$connection->close();
?>
