<?php

    $request_body = file_get_contents('php://input');
    $my_file = '../../../data/main.cpp';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    $data = $request_body;
    fwrite($handle, $data);
?>