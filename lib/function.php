<?php
include_once __DIR__ . '/config.php';
function base_url($url)
{
    global $_CONFIG;
    return $_CONFIG['BASE_URL'] . '/' . $url;
}