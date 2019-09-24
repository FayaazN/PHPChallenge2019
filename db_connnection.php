<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "fayaaznabie";
    $dbpass = "fayaaz160501";
    $db = "challenge2019";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}

