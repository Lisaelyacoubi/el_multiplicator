# El Multiplicator


## La boucle pour générer le select


On commence par déclarer un ```<form>``` dans le html, on déclare la page index.php dans le paramètre action, afin que le traitement se fasse sur la même page que le formulaire :
```
  <form action="index.php" method="post">
   // On écrit le code ici
  </form>

```
Dans ce form, on déclare un ```<select>``` en html :

```
  <select class="" name="number_multiplication">

  </select>

```

Dans ce select, on va faire une boucle en php pour générer les valeurs de la table de multiplication :

```
<?php
  for($i = 1; $i <= 10; $i++){
    echo '<option value="'.$i.'"> Table ' . $i . '</option>';
  }
 ?>

```

On écrit un structure de boucle for classique avec une initialisation de la variable « $i » à 1, une condition d'arrêt de la boucle et un opérateur d'incrémentation.  
Ensuite, on affiche les itérations de la boucle avec un echo. Toute la difficulté réside dans l'utilisation des simple quote et double quotes pour concaténer du html et du php.

En effet, dans une balise php, le html s'écrit sous forme de chaîne de caractères. Par convention, nous allons utiliser les double quotes pour la synthaxe html, et les simple quote pour arrêter la chaîne de caractères et recommencer à écrire du php.


Le résultat c'est un ```< select>``` avec dix options alors qu'on ne déclare qu'une seule option, en économisant dix lignes, c'est ce qui s'appelle ***optimiser son code***.


## L'affichage d'une table

On ouvre la balise php à l'extérieur du formulaire, on commence par déclarer une variable multiplication qui va récupérer la valeur contenue dans la superglobale ``` $_POST``` à laquelle on passe en paramètre le name du ```< select>``` du formulaire.

```
  $multiplication = $_POST['number_multiplication'];

```

On va ensuite multiplier cette valeur par les nombres de 1 à 10. Pour se faire, on fait une nouvelle boucle aussi classique que la précédente :

```
for($i = 1; $i<= 10; $i++){
 // On écrit le code ici
}

```

Dans la boucle, la variable $i contient un nombre de 1 à 10, on va multiplier ce nombre par la valeur récupérée dans la variable « $multiplication » et stocker ce résultat dans une variable « $sum ».
Il ne nous reste plus qu'à afficher le résultat avec un echo :

```
for($i = 1; $i<= 10; $i++){

  $sum = ($multiplication * $i);
  echo $multiplication . " X ". $i . " = ". $sum . "<br>";
}

```

**last but not least**, on encadre la boucle par une condition ; on passe en paramètre la fonction ```isset()``` à cette condition et on passe en paramètre de cette fonction la superglobale  ```$_POST``` pour éviter d'avoir une erreur au premier chargement de index.php.

```
      if(isset($_POST['number_multiplication'])){

        // On met la boucle ici

      }

```

## Le code complet

```
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

        <?php
          if(isset($_POST['number_multiplication'])){
            $multiplication = $_POST['number_multiplication'];
            for($i = 1; $i<= 10; $i++){

              $sum = ($multiplication * $i);
              echo $multiplication . " X ". $i . " = ". $sum . "<br>";
            }
          }

         ?>

```
