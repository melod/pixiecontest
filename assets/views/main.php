
<!DOCTYPE html>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span8 offset2">
                    <?php
                        //Include the subview
                        include($subview.'.php');
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>