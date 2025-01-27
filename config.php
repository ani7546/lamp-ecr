<?php
define("DB_SERVER", "database-lamp.c3aewga6addq.ap-south-1.rds.amazonaws.com");
define("DB_USERNAME", "admin");
define("DB_PASSWORD", "Animesh530");
define("DB_NAME", "lamp_db");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
