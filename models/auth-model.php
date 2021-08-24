<?php


    function getUserByUsername($username) {
        $db = gforceDbConnect();

        $sql = "SELECT `user_id`, `username`, `name`, `email_address`, `date_created`, `password` FROM user WHERE username = :username";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $row;
    }

?>