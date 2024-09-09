<?
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "delete from bookmark where idx = '$idx' ";
    $result = mysqli_query($connect, $query);

    Header("Location: index.php");


