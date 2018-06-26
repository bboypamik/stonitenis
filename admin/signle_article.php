<?php

$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE news_id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$vest = $statement->fetch();

?>

<div class="container">
    <h1 class="p-3"><?php echo $vest["title"] ?> </h1>
    <img class="pb-5" src="../uploads/<?php echo $vest["picture"] ?>" style="width: 100%" alt="picture">

    <p><?php echo $vest["text"]?></p>
</div>
