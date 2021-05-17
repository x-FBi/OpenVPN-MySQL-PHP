<?php
#### All These Setting are to be copied from the Python Config.py ####
$hostname='127.0.0.1'; #IP or host of main server
$databasename='users'; #Database Name
$username='admin'; # User you created in MySQL
$password='password1'; # Password for MySQL user
####
try {
        $db = new PDO('mysql:host=$hostname;dbname=$databasename', $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
        echo "Connection failed : ". $e->getMessage();
}
?>
