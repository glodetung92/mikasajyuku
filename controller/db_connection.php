<?php
function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "kogaku-sha_mikasa_hp";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}
 
function CloseCon($conn) {
    $conn -> close();
}