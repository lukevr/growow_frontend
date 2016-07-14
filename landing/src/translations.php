<?php
/**
 * Created by IntelliJ IDEA.
 * User: rettpop
 * Date: 2016-06-29
 * Time: 12:49
 */

include "./locale/default.php";
// try to retrieve and set the locale
$lang="en";

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

    // quick fix for default translation
    //TODO: make more soficticated solution
    if( empty($words) || empty($words[$key]) )
    {
        global $defaults;
        $oneWord = $defaults[$key];
        echo empty($oneWord) ? $key : $oneWord;
        return;
    }

    $oneWord = $words[$key];
    echo empty($oneWord) ? $key : $oneWord;
    return;
}
?>
