<?php

    // get_data_from_server.php
    // Get current time from server
    
    // DO SOMETHING
    $hour = date("h");
    $minute = date("i");
    $second = date("s");

    // BUILD ARRAY
    $dataArray = [
        'hour'=>$hour,
        'minute'=>$minute,
        'second'=>$second,
    ];

    // SEND IT TO THE BROWSER
    echo json_encode($dataArray);

?>
