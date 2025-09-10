<?php
function load_language($lang = 'en') {
    $file = __DIR__ . "/../i18n/$lang.json";
    if (!file_exists($file)) {
        $file = __DIR__ . '/../i18n/en.json';
    }
    $json = file_get_contents($file);
    return json_decode($json, true);
}
