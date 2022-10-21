<?php

    $ch = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_URL, "https://json.geoiplookup.io/");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $res = curl_exec($ch);
    curl_close($ch);

    $output = json_decode($res);

    echo "************************************************* \n";
    echo "Your DNS leak test results: \n\n";

    echo "IP: ";
    echo $output->ip . "\n";
    echo "ISP: ";
    echo $output->isp . "\n";
    echo "Hostname: ";
    echo $output->hostname . "\n";
    echo "Location: ";
    echo $output->city . ", " . $output->country_name ."\n";
?>