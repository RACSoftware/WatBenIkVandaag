<?php
if($_GET){
    $message = 'Je hebt niks ingevuld' ; ?>
    <html>
    <div class="alert alert-danger" role="alert" style="text-align: center">
        <b><?php echo $message ?></b>
    </div>
    </html>
    <?php
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
    <link rel="stylesheet" type="text/css" href="/assets/CSS/new.css">
    <title>Wat ben ik vandaag</title>
</head>
<body>
<div class="form-group grid" id="form">
    <h1>Wat ben jij vandaag?</h1>
    <form action="result.php" method="post">
        <div class="card" style="width: 100%">
            <div class="card-body">
                <input type="text" class="form-control" id="name" name="name" placeholder="Jouw naam" style="text-align: center">
                <br>
                <button type="submit" class="btn btn-primary">Vertel mij wat ik vandaag ben!</button>
            </div>
        </div>

    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>