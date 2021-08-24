<?php

    $router->post('/add-new-class', function() {
        header('Content-Type: application/json');

        $class_name = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
        $sched_date = filter_input(INPUT_POST, 'sched_date', FILTER_SANITIZE_STRING);
        $teacher = filter_input(INPUT_POST, 'teacher', FILTER_SANITIZE_STRING);
        $f2f_slots = filter_input(INPUT_POST, 'f2f_slots', FILTER_SANITIZE_STRING);
        $zoom_link = filter_input(INPUT_POST, 'zoom_link', FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
        
        $thumbnail = $_FILES["thumbnail"]["tmp_name"];
        $thumbnailFile = $_FILES["thumbnail"];
        $thumbnail_name =  basename($_FILES["thumbnail"]["name"]);


        //START VALIDATION
        if(empty($class_name) || empty($sched_date) || empty($teacher) || empty($f2f_slots) || empty($zoom_link) || empty($price)){

            if(empty($class_name)){$class_name_valid = true;} else { $class_name_valid = false;}
            if(empty($sched_date)){$sched_date_valid = true;} else { $sched_date_valid = false;}
            if(empty($teacher)){$teacher_valid = true;} else { $teacher_valid = false;}
            if(empty($f2f_slots)){$f2f_slots_valid = true;} else { $f2f_slots_valid = false;}
            if(empty($zoom_link)){$zoom_link_valid = true;} else { $zoom_link_valid = false;}
            if(empty($price)){$price_valid = true;} else { $price_valid = false;}

            echo json_encode(
                array('status' => 'error', 'message' => 'Please fill out all empty fields.', 
                        'fields' => array(
                            'class_name' => $class_name_valid,
                            'sched_date' => $sched_date_valid,
                            'teacher' => $teacher_valid,
                            'f2f_slots' => $f2f_slots_valid,
                            'zoom_link' => $zoom_link_valid,
                            'price' => $price_valid,
                        )
                )
            );
            die();
        }

        if($f2f_slots <= 0){
            echo json_encode(
                array('status' => 'error', 'message' => 'Please input a correct value.', 
                        'fields' => array('f2f_slots' => true,)
                )
            );
            die();
        }

        if(!checkImageFile($thumbnailFile) || empty($thumbnail)) {
            
            $thumbnail_valid = true;

            echo json_encode(
                array('status' => 'error', 'message' => 'Please upload an image.', 
                        'fields' => array('thumbnail' => $thumbnail_valid,)
                )
            );
            die();
        
        } 

        
        $target_dir = $_SERVER['DOCUMENT_ROOT'].$_ENV['TARGET_DIR'];

        if (!file_exists($target_dir)) {
            mkdir($target_dir);
        }

        $target = $target_dir.$thumbnail_name;
        
        if(move_uploaded_file($thumbnailFile["tmp_name"], "$target")){
            $result = createClass($class_name,$sched_date,$teacher,$f2f_slots,$zoom_link,$price,basename($_FILES["thumbnail"]["name"]));
        } else {
            echo json_encode(
                array('status' => 'error', 'message' => 'Thumbnail did not upload.')
            );
            die();
        }


        if($result['status'] == 'success') {
            $result['message'] = "Class successfully created.";
        } else {
            $result['message'] = "We've encountered a problem while creating a class.";
        }
        echo json_encode($result);
    });




?>