<?php if (isset($_POST["submit"])) : ?>

<?php
$title = $_POST['title'];
$text = $_POST['text'];
$picture = $_FILES['picture']['name'];


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);


if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["picture"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$sql = "INSERT INTO news (title,  text, picture ) VALUES ('$title',  '$text','$picture')";

if ($conn->query($sql)) {
    echo "New record created successfully";
    header('Location: index.php?stranica=edit_delete_news');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<?php else: ?>
<div class="container">
    <h2 class="text-center pt-5">NAPIŠITE VEST</h2>

    <form enctype="multipart/form-data" method="post">
        <label for="title">NASLOV</label>
        <input type="text" name="title" class="form-control mb-2 forma mb-5">

        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <!-- image-preview-filename input [CUT FROM HERE]-->
                <div class="input-group image-preview">
                    <input type="text" class="form-control image-preview-filename" disabled="disabled">
                    <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear " style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                        <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="picture"/> <!-- rename it -->
                    </div>
                </span>
                </div><!-- /input-group image-preview [TO HERE]-->
            </div>
        </div>
        <label class="mt-5" for="text">TEKST</label>
        <textarea cols="44" name="text" rows="10" class="form-control mb-2 forma"></textarea>
        <input type="submit" name="submit" value="Kreiraj" class="form-control mb-4 btn-primary forma mb-5">
    </form>
</div>

<?php endif; ?>