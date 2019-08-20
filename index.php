<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <!-- Add your site or application content here -->
        <div class="container">
            <div class="row header bg-info text-white">
                <img src="images/oophp.jpg" alt="Image"><h1>Practising PHP</h1>
            </div>
            <div class="row">
                <div class="col-sm-3 bg-secondary text-white">
                    <a target="_blank" href="https://www.php.net/manual/en/langref.php" class="btn btn-block btn-info">PHP DOT NET (Php Manual)</a>
                    <a target="_blank" href="https://www.php.net/manual/en/spl.iterators.php" class="btn btn-block btn-info">PHP DOT NET (Itrators)</a>
                    <a target="_blank" href="https://www.php.net/manual/en/book.strings.php" class="btn btn-block btn-info">PHP DOT NET (String Functions)</a>

                    <a target="_blank" href="https://www.w3schools.com/php7/default.asp" class="btn btn-block btn-info">W3 SCHOOLS PHP7</a>

                    <a target="_blank" href="https://www.tutorialspoint.com/php/php_design_patterns.htm" class="btn btn-block btn-info">TUTORIALS POINT PHP</a><br>
                    <?php
                    $data = glob("classes/"."*.*", GLOB_BRACE);
                    foreach ($data as $file) {
                        ?>
                            <a href="<?php echo $file;?>"><?php echo $file;?></a>
                            <?php
                    }
                    ?>
                </div>
                <div class="col-sm-9 content">
                    <?php
                    spl_autoload_register(function ($class) {
                        include_once 'classes/'.$class.'.php';
                    });
                    ?>
                    <h4>Helllo !!!</h4>

                </div>
            </div>
            <div class="row footer bg-info justify-content-center text-white">
                &copy;2019 All rights reserved.
            </div>
        </div>
        <!-- Add your site or application content above -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/popper.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
