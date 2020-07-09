<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multiplication</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <section class="container d-flex justify-content-center pt-4">
      <!--Table du 3 -->
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body bg-primary">
          <h5 class="card-title text-center pb-3">Table de multiplication</h5>
            <form class="form-control" action="index.php" method="post">
              <select class="" name="number_multiplication">
                <?php
                  for($i = 1; $i <= 10; $i++){
                    echo '<option value="'.$i.'"> Table ' . $i . '</option>';
                  }
                 ?>
              </select>
              <input type="submit" name="" value="envoyer">
            </form>
          </div>
        </div>

            <?php
              if(isset($_POST['number_multiplication'])){
                $multiplication = $_POST['number_multiplication'];
                for($i = 1; $i<= 10; $i++){

                  $sum = ($multiplication * $i);
                  echo $multiplication . " X ". $i . " = ". $sum . "<br>";
                }
              }

             ?>



  </body>
</html>
