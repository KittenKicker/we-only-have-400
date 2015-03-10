<?php
$dir = 'audio/';
$array = array();

if(is_dir($dir))
{
    if(($dh = opendir($dir)) !== false)
    {
        while(($file = readdir($dh)) !== false)
        {
            array_push($array, $file);    
        }
    }
}

echo json_encode($array);