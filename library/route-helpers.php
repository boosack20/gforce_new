<?php

    /***************************** ROUTING HELPER FUNCTIONS *****************************/

    function checkLogin($businessUrlPath) {
        /** CHECKS WHETHER A USER IS SIGNED IN */
        if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
            header('Location: '.$_ENV['ROOT'].'/login');
        }
    }

?>