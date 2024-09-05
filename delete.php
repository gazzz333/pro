<?php
    if (isset($_GET['id']) && isset($_GET['table'])) {
        $id = $_GET['id'];
        $table = $_GET['table'];
        mysql_query("DELETE FROM otzivi WHERE id = ". $_GET['id']);
        header("Location: /dashboard.php");
    } else
        header("Location: /");
?>