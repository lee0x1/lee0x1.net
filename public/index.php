<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../includes/head.php'; ?>
    
    <title>Lee Howard's Website</title>

</head>

<body>
    <?php include '../includes/header.php'; ?>

    <section>
        <h3>🧪 Projects</h3>
        <ul>
            <li>
                <a href="https://github.com/lee0x1/fc" target="_blank">fc - github user first commit finder</a>
        </ul>
    </section>
    <br>

    <section>
        <h3>📶 Contact / links</h3>
        <ul>
            <li>email: <a href="mailto:info@lee0x1.net">info@lee0x1.net</a></li>
            <li>twitter: <a href="https://twitter.com/lee0x1/" target="_blank">@lee0x1</a></li>
            <li>github: <a href="https://github.com/lee0x1" target="_blank">@lee0x1</a></li>
        </ul>
        <p>I'm usually very quick to respond via <a href="mailto:info@lee0x1.net">email</a>, but if<br>
            you prefer to use social media hit me up on
            <a href="https://twitter.com/lee0x1/" target="_blank">twitter</a>.
        </p>
        <p><em>Thank you for visiting.</em></p>
    </section>
    <br>
    <hr>

    <section>
        <h3>📔 Articles</h3>
        <ul>
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
        </ul>
    </section>
    <br>
    <?php include '../includes/footer.php'; ?>

</body>

</html>