<!doctype html>
<?php require_once('inc/head.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index of <?php echo $URI ?></title>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link rel="stylesheet" href="<?php echo base('/vendor/xinix-technology/naked-theme/www/vendor/css/naked.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base('/vendor/fortawesome/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="shortcut icon" href="<?php echo base('/favicon.ico') ?>">
    <style>
        body { font-family: "Menlo", "Monaco", monospace; }
        .container {
             padding-top:20px
        }

        ul.list-group li a .entry {
            display: inline;
            position: relative;
            bottom: 5px
        }

        @media only screen and (max-width: 480px) {
            .container {
                padding: 0;
            }

            .listview .list-group {
                margin-bottom: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="listview" style="border: 1px solid #eeeeee;">
            <h5>Index of <?php echo $URI ?></h5>
            <li class="list-group-container">
                <ul class="list-group">
                    <?php echo listing() ?>
                </ul>
            </li>
        </ul>
    </div>

    <script type="text/javascript" src="<?php echo base('/vendor/components/zepto/zepto.min.js') ?>"></script>
    <script type="text/javascript">

        $(function() {
            setTimeout(function() {
                window.scrollTo(0, 1);
            }, 100);
        });
    </script>
</body>
</html>
