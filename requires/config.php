<?php
    ini_set("session.hash_function","sha512");
    session_start();

    ini_set("max_execution_time",500);

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_data = "databank";

    $con = new mysqli($db_host,$db_user,$db_pass,$db_data);

    $db_hosti = "localhost";
    $db_useri = "root";
    $db_passi = "";
    $db_datai = "fivem-framework";

    $server = new mysqli($db_hosti,$db_useri,$db_passi,$db_datai);
?>