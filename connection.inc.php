<?php

$user = 'news';
$password = 'Chadders1';
$host = 'localhost';
$dbase = 'news';
$table = 'subscribers';


// Connect to DBase 
$dbc = mysqli_connect($host, $user, $password, $dbase) //  / mysqli_connect() function opens a new connection to the MySQL server. Needs the 4 parameters - host, user pword, dbase
    or die("Unable to connect");