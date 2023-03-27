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
        preg_match('/<time[^>]*>(.*)<\/time>/', $str, $date_matches);
        // match <h2> tag: article title index 1 element of array
        preg_match('/<h2[^>]*>(.*)<\/h2>/', $str, $title_matches);
        // convert to yyyy-mm-dd: sorting is easier
        $date = date("Y-m-d", strtotime($date_matches[1]));
        // add each article to articles array as associative arrays
        $articles[] = array("title" => $title_matches[1], "date" => $date);
    }
}

// sort array of arrays based on 'date' key=>val = title=>date
usort($articles, function ($a, $b) {
    return strtotime($b['date']) <=> strtotime($a['date']);
});

// iterate though articles 
foreach ($articles as $article) {
    // add each to li elements
    echo "<li>" .
    $article['date'] .
    ": <a href=" .
    $dir . "><strong>" .
    basename($article['title']) .
    "</strong></a></li>\n";
}

?>