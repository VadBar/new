<?php
function __autoload($controlerclassname)
{
if(file_exists(__DIR__.'/conteyner/'.$controlerclassname.'.php')){
        require __DIR__.'/conteyner/'.$controlerclassname.'.php';
    }
}