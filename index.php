<?php 
  include 'connect.php';
  $sqlOutput = mysqli_query($connect, "SELECT * FROM output");

  while($row = mysqli_fetch_assoc($sqlOutput)){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>small IOT</title>
  </head>
  <body>
    <center>

      <div class="container">
        <h2>small IOT</h2>
      </div>

      <div class="container">

        <div class="card">
          <div class="card-header">
            Panel Control
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <?php
                if($row['state'] == '0'){
                  $state = "OFF";
                }else{
                  $state = "ON";
                }
                echo "Status: ".$state;
              ?>  
            </h5>
            </p>
            <a href="action.php?id=1&state=1" class="btn btn-success">ON</a>
            <a href="action.php?id=1&state=0" class="btn btn-danger">OFF</a>
          </div>
        </div>
        <?php } 
          $sqlInput = mysqli_query($connect, "SELECT * FROM input");
          while($row = mysqli_fetch_assoc($sqlInput)){
        ?>

        <div class="card">
          <div class="card-header">
            Panel Sensor
          </div>
          <div class="card-body">
            <h5 class="card-title">Suhu: <?php echo $row['sensor1'];?>C</h5>
            <h5 class="card-title">Kelembapan: <?php echo $row['sensor2'];?>%</h5>
            </p>
          </div>
      </div>  
    </center>
    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>