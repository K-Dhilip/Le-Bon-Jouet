  <header>
      <?php
        require_once('./inc/header.php');
        ?>
  </header>





  <?php
    // Je mets en require la connexion à la BDD
    require 'inc/init.inc.php';

    if (isset($_GET['id_modele'])) {
        $requete = $pdo->prepare(" SELECT * FROM t_modeles WHERE id_modele = :id_modele ");
        $requete->execute(array(
            ':id_modele' => $_GET['id_modele'],
            // J'associe mon marqueur vide à l'id que je récupère dans l'URL


        ));

        if ($requete->rowCount() == 0) {
            header('location:tous.php');
            exit();
        }
        $t_modeles = $requete->fetch(PDO::FETCH_ASSOC);
    } else {
        header('location:tous.php');
        exit();
    }

    $contenu = "";
    // Initialisation de la variable qui va servir à afficher les messages d'erreur, si erreur.

    // La mise à jour d'une t_modeles

    $contenu = "";

    // J'initialise ma variable qui va me servir à afficher un message d'erreur en cas de soucis pour l'insertion

    // Mise à jour d'une t_modeles
    if (!empty($_POST)) {
        if ($_POST['Stock'] > 5) {
            // Je vérifie que la personne n'envoie pas un formulaire vide, inférieur à 5 caractères
            $contenu .= "<div class=\"alert alert-danger\">Merci de bien vouloir remplir le champ de réservation !</div>";
        }
        $_POST['Stock'] = htmlspecialchars($_POST['Stock']);
        // Ici on vérifie qu'il n'y a pas d'injection dans le champ, pour la sécurité.
        $maj = $pdo->prepare("UPDATE t_modeles SET Stock = :Stock WHERE id_modele = :id_modele");

        $maj->execute(array(
            ':id_modele' => $_GET['id_modele'],
            ':Stock' => $_POST['Stock']
        ));

        header('location:tous.php');
        exit();
    }
    ?>

  <!DOCTYPE html>
  <html lang="fr">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- CKEDITOR 5
    1- https://ckeditor.com/docs/ckeditor5/latest/builds/guides/quick-start.html
    2- On colle le CDN dans l'en tête
    3- On colle le script avant la fermeture de body
    4- On donne dans le script l'id qui correspond à notre élément
    5- Comme c'est une page accessible par tout le monde, on enlève pas le htmlspecialchars (on ne veux pas que les gens malveillants puissent nous injecter du sql)
    6- On va donc ajouter une fonction prédéfinie qui va nous permettre de lire les balises correctement : html_entity_decode(le texte qui doit être analysé)
    -->
      <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

  </head>

  <body>



      <div class="p-5 bg-light">
          <div class="container">
              <h1 class="display-3"><?php echo $t_modeles['titre'] ?></h1>
              <p class="lead">En <?php echo $t_modeles['Stock'] ?></p>
              <p>
                  <small><?php echo $t_modeles['prix'] ?></small>
                  <br>
              </p>
          </div>
      </div>

      <div class="container">
          <div class="row my-5">
              <div class="col-7 mx-auto">
                  <figure>
                      <img src="<?php echo $t_modeles['image'] ?>" alt="image d'illustration de l't_modeles <?php echo $t_modeles['title'] ?>" class="img-fluid">
                  </figure>
                  <?php echo $t_modeles['description'] ?>
              </div>
          </div>
          <!-- Fin de la rangée -->

          <div class="row">
              <div class="col-12 col-md-6 mx-auto">
                  <?php if (empty($t_modeles['Stock'])) { ?>
                      <!-- Si il n'y a pas de message de réservation, j'affiche un formulaire pour réserver ce bien -->

                      <h2>Réservation du bien</h2>
                      <form action="#" method="post">
                          <div class="mb-3">
                              <label for="Stock" class="">Votre message de réservation</label>
                              <textarea type="text" name="Stock" id="Stock" cols="30" rows="10" class="form-control" placeholder="Ici votre message"></textarea> <?php echo $contenu;  ?>
                          </div>
                          <button type="submit" class="btn btn-warning">Je réserve</button>
                      </form>

                  <?php } else { ?>
                      <!-- Sinon j'affiche une alerte avec le message de réservation -->
                      <div class="alert alert-danger text-center">
                          Ce bien a déjà été réservé.
                          <br>
                          Message de réservation : <?php echo html_entity_decode($t_modeles['Stock']) == 'vendu';
                                                    ?>
                      </div>
                  <?php } ?>
              </div>
          </div>
      </div>
      <!-- Fin du container -->
<!--  -->
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <!-- Script de CK Editor -->
      <script>
          ClassicEditor
              .create(document.querySelector('#Stock'))
              .catch(error => {
                  console.error(error);
              });
      </script>
  </body>

  </html>