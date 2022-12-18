<?php

    // get_data_from_server.php

    // From the user sending data to this server
    // Response will be in json format
    // The javascript reads this every few seconds.

    // GET THE JSON DATA FROM THE USER
    header("Content-Type: application/json");

    // DO SOMETHING
    $data = "12";
    $array = ['data1'=>$data];
    echo json_encode($array);
    sleep(2);

    // DO SOMETHING
    $data = "13";
    $array = ['data2'=>$data];
    echo json_encode($array);
    sleep(2);

    // DO SOMETHING
    $data = "14";
    $array = ['data3'=>$data];
    echo json_encode($array);
    sleep(2);

    // DO SOMETHING
    $data = "15";
    $array = ['data4'=>$data];
    echo json_encode($array);
    sleep(2);

?>
