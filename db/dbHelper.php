<?php
define('HOST', 'Localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'vpgt');

function execute($sql)
{
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_query($con, $sql);
    mysqli_close($con);
}

function executeResult($sql)
{
    $con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $resultset = mysqli_query($con, $sql);
    $list = [];
    while ($row = mysqli_fetch_array($resultset, 1)) {
        $list[] = $row;
    }
    mysqli_close($con);
    return $list;
}

function executeOneResult($sql){
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    $resultset = mysqli_query($con,$sql);
    $result = mysqli_fetch_assoc($resultset);
    mysqli_close($con);
    return $result;
}