<?php
$connect=mysqli_connect("localhost", "root", "", "absensi") or die("Failed to connect to MYSQL: " . mysqli_error($connect));

function query($kueri)
{
    global $connect;
    $result=mysqli_query($connect, $kueri);
    $rows=[];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}

?>