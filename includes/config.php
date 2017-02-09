<?php

//////// Database Connection Constants \\\\\\\\

define('DB_HOST','localhost'); // define host either localhost or database server \\
define('DB_USER','root'); // define database username \\
define('DB_PASS',''); // define database password \\
define('DB_NAME','oop'); // define database name \\

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); // Establishing a connection to the database \\
?>