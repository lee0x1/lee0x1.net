<?php

// all subdirectories in public folder (i.e: articles)
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

        // add each article to articles array as associative arrays
        $articles[] = array("title" => $dir, "date" => $date);
    }
}

// sort array of arrays based on 'date' key=>val = title=>date
usort($articles, function ($a, $b) {
    return $b['date'] <=> $a['date'];
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