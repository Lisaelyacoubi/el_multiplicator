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
      <!--Card table multiplication -->
      <div class="card text-center" style="width: 18rem;">
        <div class="card-body bg-primary">
          <h5 class="card-title text-center pb-3">Table de multiplication</h5>
            <form class="form-control bg-primary mb-2 border-0" action="index.php" method="post">
              <select class="bg-primary border-0 text-white" name="number_multiplication">
                <?php
                  for($i = 1; $i <= 10; $i++){
                    echo '<option value="'.$i.'"> Table ' . $i . '</option>';
                  }
                ?>
              </select>
              <input type="submit" name="" value="envoyer" class="btn btn-sm btn-dark">
            </form>
            <?php
              if(isset($_POST['number_multiplication'])){
                $multiplication = $_POST['number_multiplication'];
                for($i = 1; $i<= 10; $i++){
                  $sum = ($multiplication * $i);
                  echo $multiplication . " X ". $i . " = ". $sum . "<br>";
                }
              }
            ?>
        </div>
      <!--Fin card table multiplication -->
      </div>
      <!--Révision table de multiplication -->
      <div class="container">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Réviser les tables de multiplication
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <h4> Choisis une table de multiplication</h4>
                  <form class="form-control border-0" action="index.php" method="post">
                    <select class="border-0 bg-primary text-white" name="revision">
                      <?php
                        for($i = 1; $i <= 10; $i++){
                          echo '<option value="'.$i.'"> Table ' . $i . '</option>';
                        }
                      ?>
                    </select>

                    <input type="submit" value="envoyer">
                  </form>

                  <?php
                    if(isset($_POST['revision'])){
                      $revision_multiplication = $_POST['revision'];
                      $random_number = rand(1, 10);
                      echo $revision_multiplication . " X " . $random_number ." = " . " ?";
                    }
                  ?>


                  <form class="" action="index.php" method="post">
                    <p>Entrer votre réponse ici :</p>
                    <input type="number" name="result" placeholder="ex: 45" size="10">
                    <input type="hidden" name="randomnumber" value="<?= $random_number ?>">
                    <input type="hidden" name="revision" value="<?= $revision_multiplication ?>">


                     <input type="submit" value="envoyer">

                  </form>

                  <?php
                    if (isset($_POST['result'])){
                      $resultat = $_POST['result'];
                      $random_number = $_POST['randomnumber'];
                      revision($revision_multiplication, $resultat, $random_number);
                    }

                    function revision($revision_multiplication, $resultat, $random_number){
                      echo "<br><p>" . $random_number . " X " . $revision_multiplication . " = " . $resultat . "</p>";
                      if ($resultat == ($random_number * $revision_multiplication)){
                        echo "Bravo, tu as réussi !!";
                      }
                      else if ($resultat !== ($random_number * $revision_multiplication)){
                        echo "Désolé, ce n'est pas la bonne réponse, essaie encore";
                      }
                    }


                   ?>

                <!--form  + input qui récupère la réponse -->
                <!--comparer la réponse et le résultat -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Fin révision table de multiplication -->
    </section>
  </body>
</html>
