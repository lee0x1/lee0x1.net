<?php
// if page is not home page i.e: lee0x1.net generate refs
if (
    $_SERVER['REQUEST_URI'] != '/' &&
    $_SERVER['REQUEST_URI'] != '/lee0x1.net/public/'
) {
    footnote_gen_references();
}
?>
<footer>
    <hr>
    <p>Copyright © <?php echo date("Y"); ?> Lee Howard. All rights reserved.</p>
</footer>