<?php
    $con=mysqli_connect("localhost","prac10","tkfkdgo100412","test") or die("Error connecting to database: ".mysqli_error($con));

    // $sql = "CREATE DATABASE test";
    // $ret = mysqli_query($con, $sql);

    // $sql = "
    //     CREATE TABLE test (
    //         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         name VARCHAR(30) NOT NULL,
    //         reg_date TIMESTAMP
    //     )
    // ";

    // $sql = "INSERT INTO test VALUES (NULL, 'test', '2019-01-01 00:00:00')";

    $sql = "SELECT * FROM test";
    
    // $ret = mysqli_select_db($con, "test");
    $ret = mysqli_query($con, $sql);

    if($ret) {
        echo mysqli_num_rows($ret), "건이 조회됨";
        echo "<br>";
        while($row = mysqli_fetch_array($ret)) {
            echo $row['id'], " ", $row['name'], " ", $row['reg_date'];
            echo "<br>";
        }
    } else {
        echo "데이터 조회 실패";
    }

    if($ret === TRUE) {
        echo "Database test created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($con);
    }

    mysqli_close($con);
?>