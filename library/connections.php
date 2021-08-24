<?php
    // Created By: Randeep Ranu
    // Purpose: Connection to the database.
    // Date Created: 03/09/2021
    // History Logs:
    
    require $_SERVER['DOCUMENT_ROOT'].'/gforce3/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'].'\gforce3');
    $dotenv->load();
    
       
    function gforceDbConnect() {
        $servername = $_ENV['SERVER'];
        $username = $_ENV['USER'];
        $password = $_ENV['PASS'];
        $dbname = $_ENV['db_name'];

        $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        try {
            $link = new PDO($dsn, $username, $password, $options);
            return $link;
        } 

        catch(PDOException $e) {
            header('Location: ./404');
            exit;
        }
    }

?>
