<?php
session_start();


include '../db.php';

if (!$_SESSION['is_logged']) {
    header('Location: login.php');
}

?>

<!DOCTTYPE html>
<html>
<head>
    <title>index</title>
    <meta charset="utf-8">
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<div id="pocetna"></div>
<div class="container-fluid p-0">


</div>
<?php
$currentPage = $_GET['stranica'];
switch ($currentPage) {
    case 'create_news':
        include 'create_news.php';
        break;

    case 'edit_delete_news':
        include 'edit_delete_news.php';
        break;
    case 'single_article':
        include 'signle_article.php';
        break;

        case 'delete_news':
        include 'delete_news.php';
        break;

        case 'change_news':
        include 'change_news.php';
        break;

    default:
        include 'edit_delete_news.php';
        break;

}

?>



<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/scripts.js"></script>


</body>
</html>