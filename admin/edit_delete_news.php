
<?php

$sql = "SELECT * FROM news ORDER BY news_id DESC";

$statement = $conn->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$vesti = $statement->fetchAll();




?>
<a class="form-control m-5 btn-primary" href="index.php?stranica=create_news" style="width: 90px">KREIRAJ</a>
<table class="table table-striped">
    <thead>
    <tr>
        <td>id</td>
        <td>Naslov</td>
        <td>Izmeni</td>
        <td>Obriši</td>
    </tr>
    </thead>

    <?php foreach ($vesti as $vest) : ?>
        <tbody>

        <td><?php echo $vest["news_id"]?></td>
        <td><a href="index.php?stranica=single_article&id=<?php echo $vest["news_id"] ?>"><?php echo $vest["title"] ?></a></td>
        <td><a href="index.php?stranica=change_news&id=<?php echo $vest["news_id"] ?>"><i class="fas fa-pencil-alt"></i></a></td>
        <td><a onclick="myFunction(<?php echo $vest["news_id"] ?>)" href="#"><i class="fas fa-trash-alt"></i></a></td>



        </tbody>

    <?php endforeach; ?>
</table>

<script>
    function myFunction(id) {
        var conf = confirm("Da li želite da obrišete vest?");
        if(conf == true){
            window.location.replace('index.php?stranica=delete_news&id='+id);
        }

    }
</script>