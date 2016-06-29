<?php
/**
 * Created by IntelliJ IDEA.
 * User: rettpop
 * Date: 2016-06-29
 * Time: 12:49
 */

// try to retrieve and set the locale
$lang="ru";

if( session_start() ){
    if( !empty($_SESSION['lang']) ) {
        $lang = $_SESSION['lang'];
    }
}

if( !empty($_POST['lang']) ){
    $lang = $_POST['lang'];
}

if( !empty($_GET['lang']) ){
    $lang = $_GET['lang'];
}

$_SESSION['lang'] = $lang;

if( file_exists("./locale/".$lang.".php") ) {
    include "./locale/" . $lang . ".php";
}

// searching different words
function getLoc($key)
{
    global $words;
    if ( !empty($words) )
    {
        $word = $words[$key];
        echo empty($word) ? $key : $word;
        return;
    }
    echo $key;
    return;
}
?>
