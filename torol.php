<?php

require 'db.php';


if (isset($_POST['torol'])) {

    $id = $_POST['azonosito'];


    $sql = "DELETE FROM todok WHERE ID='" . $id . "'";


    if ($mysqli->query($sql)) {
        echo "siker";
    } else {
        echo "sikertelen";
    }
}
?>