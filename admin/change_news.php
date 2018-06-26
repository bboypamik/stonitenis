<?php if (isset($_POST["submit"])) :?>
<?php

    $id = $_POST["news_id"];
    $heading = $_POST['title'];
    $text =    $_POST['text'];
    $picture = $_FILES['picture']['name'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);

    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["picture"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    //$sql = "INSERT INTO news (heading, picture, text,user_id) VALUES ('$heading', '$picture', '$text', 1)";
    $sql = "UPDATE news SET title = '$heading',  text = '$text' WHERE news_id =$id";


    if ($conn->query($sql)) {
        echo "New record created successfully";
        header('Location: index.php?stranica=edit_delete_news');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }




    ?>
<?php else: ?>

<?php

$id = $_GET["id"];
$sql = "SELECT * FROM news WHERE news_id = '" . $id . "'";
$statement = $conn->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$vest = $statement->fetch();

?>
    <div class="container">
    <h2 class="text-center pt-5">IZMENITE VEST</h2>
    <form method="post">
        <label for="naslov">NASLOV</label>
        <input type="text" name="title" value="<?php echo $vest["title"] ?>" class="form-control mb-2 forma">
        <input type="hidden" name="news_id" value="<?php echo $vest["news_id"] ?>">


        <label for="text">TEKST</label>
        <textarea cols="44" name="text" rows="10"   class="form-control mb-2 forma"><?php echo $vest["text"] ?></textarea>
<input type="submit"  name="submit" value="IZMENI" class="form-control mb-4 btn-primary forma mb-5">
</form>
</div>

<?php endif; ?>