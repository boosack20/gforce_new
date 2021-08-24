<?php

/***************************** MIDDLEWARES *****************************/

    $router->set404(function() {
        // SET DOCUMENT ROOT
        $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        include $root.'/pages/404.php';
    });

/***************************** MIDDLEWARES *****************************/

?>