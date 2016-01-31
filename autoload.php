<?php
function __autoload($class)
{
if(file_exists(__DIR__.'/conteyner/'.$class.'.php')){
        require __DIR__.'/conteyner/'.$class.'.php';
    }
}