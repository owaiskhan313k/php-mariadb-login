<?php 

// Change this to your connection info.
$DATABASE_HOST = 'my-mariadb';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'owais';
$DATABASE_NAME = 'owais_db';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
