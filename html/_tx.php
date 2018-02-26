<?php
/**
 * Define active language
 */
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
} else {
    $lang = "en";
}

/**
 * Native names for languages
 */

$LANG_NAMES = array(
    'en' => 'English',
    'es' => 'Español',
    'it' => 'Italiano',
    'nl' => 'Nederlands',
    'pt' => 'Português',
    'ja' => '日本語',
    'zh' => '中文',
);

/**
 * Load strings
 */
include('locales/' . $lang . '.php');

/**
 * Helper functions
 */
function tx($key)
{
    global $LANG;
    return $LANG[$key];
}

function tx_sprintf($key, ...$args)
{
    global $LANG;
    return sprintf($LANG[$key], ...$args);
}
?>