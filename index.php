<!doctype html>
<html lang="fr">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
  <header>
    <?php
    require_once('./inc/header.php');
    ?>
  </header>
  <main>





    <?php
    // Je mets en require la connexion à la bbd
    require './inc/init.inc.php';

    // Ma requête pour afficher les 15 derniers biens immobiliers
    $requete = $pdo->query(" SELECT * FROM t_modeles ORDER BY id_modele DESC LIMIT 0,15"); //

    ?>
    <!doctype html>
    <html lang="fr">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    </head>

    <body>



      <div class="container">
        <div class="row my-5">

          <?php while ($t_modeles = $requete->fetch(PDO::FETCH_ASSOC)) { ?>
            <!-- Ouverture de la boucle WHILE. Ce n'est pas parce que je ne suis plus dans un passage PHP que ma boucle ne continue pas. Tans qu'il n'y a pas d'accolade fermante dans un passage PHP, la boucle continue -->

            <!-- si je n'ai pas de message de réservation dans ma BDD alors j'affiche une card "normale" -->
            <?php if (empty($t_modeles['reservation_message'])) { ?>

              <div class="col-12 col-md-6 col-lg-3 mb-5">
                <div class="card text-center shadow">
                  <img class="card-img-top" src="<?php echo $t_modeles['image'] ?>" alt="">
                  <div class="card-body">
                    <h4 class="card-title text-uppercase fs-6"><?php echo $t_modeles['titre'] ?></h4>
                    <!-- j'affiche une partie de la description accompagné d'un bouton lire la suite -->
                    <p class="card-text"><?php echo substr($t_modeles['description'], 0, 230) ?> ... <a href="Consulter.php?id_modele=<?php echo $t_modeles['fabricant'] ?>" class="btn btn-primary btn-sm mt-1">Consulter un modèle</a></p>
                  </div>
                  <div class="card-footer">
                    <button><?php echo $t_modeles['Stock'] ?></button>
                    <p>En <?php echo $t_modeles['prix'] ?></p>
                  </div>
                </div>
              </div>

              <!-- SINON j'affiche une card avec un bouton de réservation et grisée -->
            <?php } else { ?>

              <div class="col-12 col-md-6 col-lg-3 mb-5">
                <div class="card text-center shadow position-relative">
                  <img class="card-img-top opacity-50" src="<?php echo $t_modeles['image'] ?>" alt="">
                  <div class="card-body opacity-50">
                    <h4 class="card-title text-uppercase fs-6"><?php echo $t_modeles['titre'] ?></h4>
                    <p class="card-text"><?php echo substr($t_modeles['description'], 0, 30) ?> ... <a href="Consulter.php?id_modele=<?php echo $t_modeles['id_modele'] ?>" class="btn btn-primary btn-sm mt-1">Consulter un modèle</a></p>
                  </div>
                  <div class="card-footer opacity-50">
                    <p id="check">En <?php echo $t_modeles['stock=vendu'] ?>
                    <p>
                    <p><?php echo $t_modeles['prix'] ?>
                  </div>
                  <!-- Mon bouton "réservé" -- Bootstrap v.5 -->
                  <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill border border-white shadow p-3 bg-danger text-uppercase">Déjà réservé</span>
                </div>
              </div>

            <?php } ?>

          <?php } ?>
          <!-- fin de la boucle -->

        </div><!-- fin de la rangée -->
      </div><!-- fin du container -->
      <script>
        document.getElementById("check").style.color = "#ff0000"; <
        script >
          <
          !--Bootstrap JS-- >
          <
          script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin = "anonymous" >
      </script>
      <footer>
        <?php
        require_once('./inc/footer.php');
        ?>
      </footer>
    </body>

    </html>


























  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>