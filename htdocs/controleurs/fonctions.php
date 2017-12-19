<?php
/**
 * Controler functions
 */


/**
 * Determines if a variable is an integer
 * @param mixed $int
 * @return bool
 */
function isAnInteger($int)
{
    return is_numeric($int);
}

/**
 * Determines if a variable is a string
 * 
 * @param mixed $string
 * @return bool
 */
function isAString($string)
{
    if (empty($string)) {
        return false;
    } else {
        return is_string($string);
    }
}

function isAPassword($string)
{
    if (empty($string) || strlen($string) < 8) {
        return false;
    } else {
        return is_string($string);
    }
}

?>