<?php
    $count = $_GET['count'] ;
    $data = [];
    $time = time() - 10*$count;
    for ($i=0; $i<$count; $i++) {
        $data[] = (object)[
            "pm25" => rand(1, 1000),
            "pm10" => rand(1, 1000),
            "time" => date('Y-m-d H:i:s', $time),
        ];
        $time += 10;
    }
    // echo json_encode($data, JSON_PRETTY_PRINT);
    echo json_encode($data);

?>