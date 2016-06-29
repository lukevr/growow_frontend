<?php
/**
 * Created by IntelliJ IDEA.
 * User: rettpop
 * Date: 2016-06-29
 * Time: 12:49
 */

$lang="ua";

if( file_exists("./locale/".$lang.".php") ) {
    include "./locale/" . $lang . ".php";
}

function getLoc($key)
{
    global $words;
    if ( !empty($words) )
    {
        $word = $words[$key];
        return empty($word) ? $key : $word;
    }
    return $key;
}

echo getLoc("WILL CONTACT YOU SOON");

?>
