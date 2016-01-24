<?php
function headers($article)
{
    if (!empty($article['header']) && isset($article['header'])) {
        return $article;
    } else {
        return FALSE;
    }
}
function padding ($article)
{
    if(!empty($article['padding']) && isset($article['padding'])){
        return $article;
    }else{
        return FALSE;
    }
}
function image($article)
{
    if(!empty($article['image']) && isset($article['image']))
    {
        if($_FILES['image']['size']<= 100000){
            if(in_array($_FILES['image']['type'],array('image/jpeg','image/gif','image/png'))){
                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                    move_uploaded_file($_FILES['image']['tmp_name'],__DIR__ .'/../image/' . $_FILES['image']['name']);
                    return '../image/' . $_FILES['image']['name'];

                }else{
                    return FALSE;
                }
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }else{
        return FALSE;
    }
}