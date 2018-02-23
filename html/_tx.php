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