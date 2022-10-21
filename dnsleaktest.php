<?php

    $ch = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json'
    );

    curl_setopt($ch, CURLOPT_URL, "https://json.geoiplookup.io/${argv[1]}");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    $res = curl_exec($ch);
