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
            //pass the data from the form to the controller, get the reponse, render the response.            
            include 'Controller.php';
            $jsondata;
            $contObject = new Controller();
            $jsondata = $contObject->getListOfPosts($_POST['feedId'], $_POST['searchTerms']);
            ?>
            <?php $i = 1;foreach ($jsondata as $val):?>
                <div style="overflow:auto">
                    <div class="text-block">
                        <h4><?php echo $i; $i++; ?> ) </h4>
                        <h4><?php echo "Title: " . $val['title']; ?></h4>
                        <h4><?php echo "Author: " . $val['author']['name']; ?></h4>
                        <h4><?php echo "Date Published: " . $val['publish_date']; ?></h4>
                        <form name="form" id ="<?php echo "form" . $i ?>"  action="View3.php" method="POST">
                            <input type="submit" value="go to details" name = "submit">
                            <input type="hidden" value="<?php echo $_POST['feedId'] ?>"name="feedId"/>
                            <input type="hidden" value="<?php echo $val['id'] ?>"name="assetId"/>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>