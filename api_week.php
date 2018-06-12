<?php
    $count = 10080;
    $data = [];
    
    $servername = "10.76.8.176:33306";
    $username = "wlx";
    $password = "41ccd010";
    $dbname = "wlx_weather";
    
    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    } 
    
    $sql = "SELECT temperature,humidity,timestamp FROM data ORDER BY timestamp DESC LIMIT $count";
    $result = $conn->query($sql);
    $conn->close();
    $i=0;
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            if ($i%60==0){   
                $data[] = (object)[
                    "temperature" => $row["temperature"],
                    "humidity" => $row["humidity"],
                    "timestamp" => $row["timestamp"],
                ];
            } 
            $i++;   
        }
    }
    echo json_encode($data);
?>