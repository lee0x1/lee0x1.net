<?php

$directories = glob('*', GLOB_ONLYDIR);
// search directory for article subdirectories
foreach ($directories as $dir) {
    $phpfiles = glob($dir . "/index.php");
    // search for index.html file
    foreach ($phpfiles as $phpfile) {
    // parse html as string
    $str = file_get_contents($phpfile);
    // return tags string value
    $start = strpos($str, '<time>');
    $end = strpos($str, '</time>', $start);
    $date = substr($str, $start, $end-$start+7);
    // remove dashes from title name
    $title = str_replace('-', ' ', $dir);
    // add title as link tag to index page
    echo "<li>" . $date . ": <a href=\"$dir\">" . basename($title) . "</a></li>\n";
    }
}
?>