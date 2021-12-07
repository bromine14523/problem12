<?php
    echo "con -> index.php <br>";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://mon.localhost/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    var_dump(curl_error($ch)); die;
    curl_close($ch);

