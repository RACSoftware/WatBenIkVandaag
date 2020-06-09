<?php
if (isset($_POST['name']) and $_POST['name'] != ''){
    $name = $_POST['name'];
}
else{
    header("Location: index.php?message=False");
    exit;
}

$number = rand(1,100);
$status = '';
if ($number < 10 or $number === 10){
    $status = 'jij bent gay';
}
elseif ($number > 10 and $number < 20 or $number === 20){
    $status = 'jij bent dom';
}
elseif ($number > 20 and $number < 30 or $number === 30){
    $status = 'jij bent geschikt voor MBO';
}
elseif ($number > 30 and $number < 40 or $number === 40){
    $status = 'jij bent een Full Stack Wordpress Devolper';
}
elseif ($number > 40 and $number < 50 or $number === 50){
    $status = 'jij hebt een lul van 50 cm ;)';
}
elseif ($number > 50 and $number < 60 or $number === 60){
    $status = 'jij hebt een lul van 0.1 mm :(';
}
elseif ($number > 60 and $number < 70 or $number === 70){
    $status = 'jij hebt corona :) RIP';
}
elseif ($number > 70 and $number < 80 or $number === 80){
    $status = 'je kan beter euthenasie plegen ¯\_(ツ)_/¯ ';
}
elseif ($number > 80 and $number < 90 or $number === 90){
    $status = 'je bent geweldig';
}
elseif ($number > 90){
    $status = 'jij bent de mooiste persoon op deze werleld UwU';
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/main.css">
    <title>Wat ben ik vandaag</title>
</head>
<body>
<h1>Jouw resultaat!</h1>
<p> Beste <?php  echo $name . ', ' . $status ?></p>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

