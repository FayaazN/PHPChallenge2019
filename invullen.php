


<?php

include 'index.html';
$item = $_POST['item'];
$aantal = $_POST['aantal'];
$prijs = $_POST['prijs'];

if ( !empty($item) ||  !empty($aantal) ||  !empty($prijs) ) {
    //Connectie invullen
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    //Maak connectie
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (mysqli_connect_error()) {
        die("Connect Error(".mysqli_connect_errno().")". mysqli_connect_error());
    } else {
        $SELECT = "SELECT item  From boodschappen Where item = ? Limit 1";
        $INSERT = "INSERT Into boodschappen (item, aantal, prijs) values(?, ?, ?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $item);
        $stmt->execute();
        $stmt->bind_result($item);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $item, $aantal, $prijs);
            $stmt->execute();
            echo "Boodschap toegevoegd!";
        } else {
            echo "Dit item staal al op het lijstje.";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All field are required";
    die();
}

?>





