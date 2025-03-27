<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "gadgetsdb";

    $conn = mysqli_connect($host, $user, $pass, $bd);

    mysqli_select_db($conn, $bd);

    return $conn; 

};

?>