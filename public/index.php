<!DOCTYPE html>
<html lang="en">

<head>
    <?php $ROOT = './'; include '../includes/head.php'; ?>
    <meta 
        name="description"
        content="Lee Howard's personal network of development and other cool things."
    >
    <title>Lee Howard's Website</title>

</head>

<body>
    <?php include '../includes/header.php'; ?>

    <section>
        <h2>🧪 Projects</h2>
        <ul>
            <li>
                <a href="https://github.com/lee0x1/fc" target="_blank">fc - github user first commit finder</a>
        </ul>
    </section>
    <br>

    <section>
        <h2>📶 Contact / links</h2>
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
            <?php include '../includes/articles.php'?>
        </ul>
    </section>
    <br>
    <?php include '../includes/footer.php'; ?>

</body>

</html>