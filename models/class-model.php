<?php

    // CREATE
    function createClass($class_name,$sched_date,$teacher,$f2f_slots,$zoom_link,$price,$thumbnail) {

        $db = gforceDbConnect();

        try {
            $db->beginTransaction();
        
            $sql = "INSERT INTO class (class_name, sched_date, teacher, f2f_slots,zoom_link, price, image,created_by)
                    VALUES(:class_name, :sched_date, :teacher, :f2f_slots, :zoom_link, :price, :thumbnail,:created_by)";
        
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':class_name', $class_name, PDO::PARAM_STR);
            $stmt->bindValue(':sched_date', $sched_date, PDO::PARAM_STR);
            $stmt->bindValue(':teacher', $teacher, PDO::PARAM_STR);
            $stmt->bindValue(':f2f_slots', $f2f_slots, PDO::PARAM_STR);
            $stmt->bindValue(':zoom_link', $zoom_link, PDO::PARAM_STR);
            $stmt->bindValue(':price', $price, PDO::PARAM_STR);
            $stmt->bindValue(':thumbnail', $thumbnail, PDO::PARAM_STR);
            $stmt->bindValue(':created_by', $_SESSION['user']['user_id'], PDO::PARAM_INT);
            
            $stmt->execute();
            $rowsChanged = $stmt->rowCount();
            $db->commit();
            $stmt->closeCursor();
            
            return array('status' => 'success', 'rowsChanged' => $rowsChanged);
        } catch(Exception $e) {
            $db->rollBack();
            return (array('status' => 'error', 'error' => $e->getMessage()));
        }
    }

     // READ
     function getAllClasses() {
        $db = gforceDbConnect();

        $sql = "SELECT class_name, sched_date, teacher, f2f_slots,zoom_link, price, image, for_approval, enrolled, attended
        FROM class where is_active = :is_active";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':is_active', "1", PDO::PARAM_INT);
        
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        
        return $rows;
    }


?>