<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family:Verdana;color:black;">

        <div style="background-color:#1AF5D4;;padding:15px;text-align:center;">
            <h1> Results </h1>
        </div>

        <div style="overflow:auto">
            <?php
            include 'Controller.php';
            $jsondata;
            $contObject = new Controller();
            $jsondata = $contObject->getAssetDetails($_POST['feedId'], $_POST['assetId']);
            ?>
            <div style="overflow:auto">
                <div class="text-block">
                    <h4><?php echo "Title: " . $jsondata['title']; ?><h4>
                    <img style="width:50%" src="<?php echo $jsondata['featured_image']; ?>" alt="<?php echo $val['title']; ?>" >
                    <h4><?php echo "Author: " . $jsondata['author']['name']; ?></h4>
                    <h4><?php echo "Date Published: " . $jsondata['publish_date']; ?></h4>
                    <h4><?php echo "Body: " . $jsondata['body'] ?></h4>
                    <h4><a href="<?php echo $jsondata['web_url'] ?>"> Website </a></h4>
                </div>
            </div>
        </div>
    </body>
</html>