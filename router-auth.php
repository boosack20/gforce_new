<?php

/***************************** AUTH PATHS *****************************/
    $router->get('/login', function() {
        // SET DOCUMENT ROOT
        $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
        // RENDER PAGE
        include $root.'/pages/login.php';
    });

    $router->post('/login', function() {
        header('Content-Type: application/json');
        $body = json_decode(file_get_contents("php://input"), true);

        $account = getUserByUsername($body['username']);

        if (empty($account)) {
            echo json_encode(array('status' => 'error','message' => 'The provided username does not exist.', 'fields' => array('username' => true, 'password' => true)));
            die();
        }
        
        $hashcheck = password_verify($body['password'], $account['password']);
        if (!$hashcheck) {
            echo json_encode( array('status' => 'error','message' => 'The username or password you provided does not match.', 'fields' => array('username' => true, 'password' => true)));
            die();
        } else {
            array_pop($account);
            $_SESSION['loggedIn'] = true;
            $_SESSION['user'] = $account;
            echo json_encode( array('status' => 'success','data' => $account));
            die();
        }
    });

    $router->get('/logout', function() {
        session_destroy();
        header('Location: ./login');
    });
    // $router->get('/login', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/login.php';
    // });

    // $router->get('/forgot-password', function() {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/login.php';
    // });

    // $router->get('/reset-password/{token}', function($token) {
    //     // SET DOCUMENT ROOT
    //     $root = $_SERVER['DOCUMENT_ROOT'] . $_ENV['ROOT'];
        
    //     // RENDER PAGE
    //     include $root.'/pages/login.php';
    // });

    // $router->get('/logout', function() {
    //     session_destroy();
    //     header('Location: ./login');
    // });

/***************************** AUTH PATHS *****************************/

?>