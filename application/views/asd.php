<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>测试</title>
        
    </head>
    <body>
        <?php
            $count = 10;
            $data = [];
            
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "weather";
            
            // 创建连接
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            } 
            
            $sql = "SELECT temperature,humidity,timestamp FROM data ORDER BY timestamp DESC LIMIT $count";
            $result = $conn->query($sql);
            $conn->close();

            if ($result->num_rows > 0) {
                // 输出数据
                while($row = $result->fetch_assoc()) {
                    $data[] = (object)[
                        "temperature" => $row["temperature"],
                        "humidity" => $row["humidity"],
                        "timestamp" => $row["timestamp"],
                    ];
                }
            }
            echo json_encode($data);
        ?> 
    </body>
</html>