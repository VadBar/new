<?php
function file_upload($field)
{
if(empty($_FILES)){
    return false;
}
    if(0 != $_FILES['image']['error']){
        return false;
    }

    if($_FILES['image']['size'] > 100000){
        return false;
    }

    if(!in_array($_FILES['image']['type'],array('image/gif','image/jpeg'))){
        return false;
    }

    if($_FILES['image']['name'] == '.' && $_FILES['image']['name'] == '..' ){
        return false;
    }

    if(is_uploaded_file($_FILES['image']['tmp_name'])){
    $res =  move_uploaded_file($_FILES['image']['tmp_name'],__DIR__ .'/../image/'. $_FILES['image']['name']);
        if(!$res){
            return false;
        }else{
            return '../image/'. $_FILES['image']['name'];
        }

    }
}