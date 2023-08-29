<?php

    $sqlCommand = "SELECT * FROM " . TBL_PACKAGE;
    $results = $connection->query($sqlCommand);

    $response = array();
    $records = array();

    while ($row = $results->fetch_assoc()) {
        array_push($records, $row);
    }

    print_r($records);

    echo json_encode($response);

?>