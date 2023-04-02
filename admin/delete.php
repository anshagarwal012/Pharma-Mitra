<?php
require('db.php');
if (isset($_GET['table']) && isset($_GET['id']) && !empty($_GET['table']) && !empty($_GET['id'])) {
$ids = implode(',',json_decode( $_GET['id']));
    $sql = "DELETE FROM " . $_GET['table'] . " WHERE id IN ($ids)";

    if (mysqli_query($conn, $sql)) {
        header('location:' . $_SERVER['HTTP_REFERER']);
    } else {
        echo'sdsd';
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
