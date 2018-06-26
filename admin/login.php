<?php if (isset($_POST["submit"])) :?>

<?php
session_start();
include '../db.php';
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM login WHERE username = :username AND password = :password ";

$statment = $conn->prepare($sql);
    $statment->bindParam(":username",$username);
    $statment->bindParam(":password",$password);
    $statment->execute();
$login = $statment->fetch();

    if ($login ){
        $_SESSION["is_logged"] = true;
        $_SESSION["username"] = $login['username'];
        $_SESSION["user_id"] = $login['id'];
        header('Location: index.php?stranica=edit_delete_news');
    }
    else{
        echo "Pogrešno korisničko ime ili lozionka, probajte ponovo.";
    }

    ?>
<?php else: ?>

<div class="container">
    <h2 class="m-5 p-5">ULOGUJTE SE</h2>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required class="form-control mb-2 forma">

        <label for="password">Šifra</label>
        <input type="password" name="password" required class="form-control mb-2 forma">
        <input type="submit"  name="submit" value="LOGIN" class="form-control mb-4 btn-primary forma mb-5">


    </form>
</div>

<?php endif ?>