
<?php
// credit: fabiensanglard.net
// TODO: modify footnote_gen_references() to use <li> instead of tables

$footnote_text = array();
$footnote_url = array();
$footnote_count = 0;
function footnote($text, $url)
{
    global $footnote_text;
    global $footnote_url;
    global $footnote_count;
    $footnote_count = $footnote_count + 1;
    $footnote_text[$footnote_count] = $text;
    $footnote_url[$footnote_count] = $url;

    echo "<a name=\"back_", $footnote_count, "\" style=\"text-decoration: none;\" href=\"#footnote_", $footnote_count, "\"><sup>[", $footnote_count, "]</sup></a>";
}

function footnote_gen_references()
{
    global $footnote_text;
    global $footnote_url;
    global $footnote_count;

    if ($footnote_count == 0) {
        return;
    }
    echo "<style type='text/css'>td.ref {  padding-bottom: 0ch; width:0;}</style>";
    echo "<h2>References</h2>";
    echo "<hr>";
    // echo "<p id='paperbox' style='text-align:left;'>";
    echo "<table><tbody style='vertical-align: top;'>";
    for ($i = 1; $i <= $footnote_count; $i++) {
        echo "<tr>";
        $target = "<a href=\"" . $footnote_url[$i]  . "\">" . $footnote_text[$i] . "</a>";
        if ($footnote_url[$i] == "") {
            $target = $footnote_text[$i] . ".";
        }
        $index = $i;
        if ($i < 10 && $footnote_count > 9) {
            $index = " " . $index;
        }
        echo "<td class='ref' style='width:1ch;'><a name=\"footnote_", $i, "\"></a><a href=\"#back_", $i, "\">^</a></td><td  class='ref' style='width:4ch;'> [", $index, "]</td><td style='width:100%;text-align:left;' class='ref'>",  $target, "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
    // echo "</p>";
}
