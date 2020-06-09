<?php
if (isset($_POST['name']) and $_POST['name'] != ''){
    $name = strip_tags($_POST['name']);
}
else{
    header("Location: index.php?message=False");
    exit;
}
$date = date("d.M.Y");

$options = array("toch echt wel gay", "verkozen tot een dom persoon", " geschikt voor het MBO", "een Full Stack Wordpress Devolper geworden, SCHANDE !", "gecertificeerd met een lul van 50 cm ;)", "gecertificeerd met een lul van 0.1 mm :(", "positief getest op corona :) RIP", "aangeraden om euthenasie  te laten plegen ¯\_(ツ)_/¯", "Officieel geweldig OwO", "officieel de beste en mooiste peroson op deze wereld! UwU");
$status = $options[array_rand($options)];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/CSS/new.css">
    <title>Wat ben ik vandaag</title>
</head>
<body>
<div id="result">
    <h1>Jouw resultaat!</h1>
    <div class="card" style="width: 100%">
        <div class="card-body">
            <h5 class="card-title">Vandaag is: <?php  echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Op: <?php echo $date ?></h6>
            <p class="card-text"><?php echo $status ?></p>
            <a class="btn btn-primary" href="index.php" role="button">Probeer opnieuw</a>
            <a class="btn btn-primary" href="#" role="button">Deel met socials</a>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>


