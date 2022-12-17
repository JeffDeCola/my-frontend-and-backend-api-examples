<?php

    // post_data_to_server.php

    // From the user sending data to this server
    // Response will be in json format
    // The javascript reads this every few seconds.

    // GET THE JSON DATA FROM THE USER
    header("Content-Type: application/json");
    $attributesJSON = json_decode(file_get_contents("php://input"));

    // UN PARSE IT
    $operand1 = $attributesJSON->operand1;
    $operand2 = $attributesJSON->operand2;

    // DO SOMETHING
    $sum = (float)$operand1 + (float)$operand2;
    sleep(2);

    // RESPONSE
    $array = ['sum'=>$sum];
    echo json_encode($array);

?>
