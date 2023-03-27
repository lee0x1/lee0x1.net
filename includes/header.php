<header>
    <h1><a id="site-title" href="<?php echo $ROOT ?>">Lee Howard</a></h1>
    <?php
    if (
        $_SERVER['REQUEST_URI'] == '/lee0x1.net/' ||
        $_SERVER['REQUEST_URI'] == '/lee0x1.net/public/'
    ) {
        echo "<p>Welcome to my personal network of development and other cool things.</p>";
    }
    ?>
</header>