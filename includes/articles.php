<?php

// all subdirectories in public folder (i.e: articles)
$directories = glob('*', GLOB_ONLYDIR);

// search directory for article subdirectories
foreach ($directories as $dir) {

    $phpfiles = glob($dir . "/index.php");
    // search for index.php file
    foreach ($phpfiles as $phpfile) {
        // parse .php file as string
        $str = file_get_contents($phpfile);
        // match <time> tag and extract text value
        preg_match('/<time[^>]*>(.*)<\/time>/', $str, $matches);
        // convert to yyyy-mm-dd: sorting is easier
        $date = date("Y-m-d", strtotime($matches[1]));
        // add each article to articles array as associative arrays
        $articles[] = array("title" => $dir, "date" => $date);
    }
}

// sort array of arrays based on 'date' key=>val = title=>date
usort($articles, function ($a, $b) {
    return strtotime($b['date']) <=> strtotime($a['date']);
});

// iterate though articles 
foreach ($articles as $article) {
    
    // removes dashes from article title
    $title = str_replace('-', ' ', $article['title']);
    
    // add each article as list item
    echo "<li>" .
    $article['date'] .
    ": <a href=" .
    $article['title'] .
    "><strong>" .
    basename($title) .
    "</strong></a></li>\n";
}

?>