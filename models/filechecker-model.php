<?php

function checkFileExtension($file){
    
    //list the allowed file extension
    $allowed_file_extension = array(
        "docx",
        "docs",
        "pdf"
    );
    
    //get file extension
    $file_extension = pathinfo($file["name"], PATHINFO_EXTENSION);

    if (!in_array($file_extension, $allowed_file_extension)) {
        return false;
    }

    // Check file size
    if ($file["size"] > 2000000) {
        return false;
    }

    return true;

}

function checkVideoExtension($file){
    
    //list the allowed file extension
    $allowed_video_extension = array(
        "mp4",
        "avi",
        "mov",
        "wmv"
    );
    
    //get file extension
    $video_extension = pathinfo($file["name"], PATHINFO_EXTENSION);

    if (!in_array($video_extension, $allowed_video_extension)) {
        return false;
    }

    // Check file size
    if ($file["size"] > 10000000) {
        return false;
    }

    return true;

}

function checkImageFile($file){
    
    //list the allowed image extension
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );

    //get file extension
    $image_extension = pathinfo($file["name"], PATHINFO_EXTENSION);


    if (!in_array($image_extension, $allowed_image_extension)) {
        return false;
    }

    // Check file size
    if ($file["size"] > 2000000) {
        return false;
    }
      
    return true;  
}


function checkCSV($file){
    
    //list the allowed file extension
    $allowed_file_extension = array(
        "csv"
    );
    
    //get file extension
    $file_extension = pathinfo($file["name"], PATHINFO_EXTENSION);

    if (!in_array($file_extension, $allowed_file_extension)) {
        return false;
    }

    return true;

}
?>