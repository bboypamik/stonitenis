<?php

$id = $_GET["id"];

$sql = "DELETE FROM news WHERE news_id =$id";

$statement = $conn->prepare($sql);
$statement->execute();
header('Location: index.php?stranica=edit_delete_news');
?>