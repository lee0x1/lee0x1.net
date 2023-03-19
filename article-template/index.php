<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $ROOT = '../';
        $DESC = "";     // article description    
        $TITLE = "";    // article title
        include '../../includes/head.php';
    ?>
</head>

<body>
    <?php include '../../includes/header.php'; ?>

    <h2><?php echo $TITLE ?></h2>
    <time>MM/DD/YYYY</time>
    
    <!-- write new article content -->
    
    <?php include '../../includes/footer.php'; ?>
</body>

</html>