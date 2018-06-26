<?php

$sql = "SELECT * FROM news ORDER BY news_id DESC";

$statement = $conn->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$vesti = $statement->fetchAll();


function skracivanje($opis)
{
    return substr($opis, 0, 80) . '...';
};

?>
<div class="container pt-5 mt-5">
<?php foreach ($vesti as $vest) : ?>

    <div class="row events pt-3">
        <div class="col-lg-8">
            <h2 class="mb-5"><?php echo $vest['title'] ?></h2>
            <p><?php echo skracivanje($vest['text']) ?></p>
            <a href="index.php?stranica=event&id=<?php echo $vest["news_id"] ?>">saznaj više</a>
        </div>
        <div class="col-lg-4">
            <img class="mb-5" src="uploads/<?php echo $vest['picture'] ?>" style="width: 100%" alt="">

        </div>

    </div>
<?php endforeach; ?>

</div>