<?php

// Je mets en require la connexion à la BDD

require 'inc/init.inc.php';

// Le traitement du formulaire pour l'insertion en BDD

if (!empty($_POST)) {
  // vérification SQL et failles
  $_POST['image'] = htmlspecialchars($_POST['image']);
  $_POST['titre'] = htmlspecialchars($_POST['titre']);
  $_POST['description'] = htmlspecialchars($_POST['description']);
  $_POST['fabricant'] = htmlspecialchars($_POST['fabricant']);
  $_POST['categorie'] = htmlspecialchars($_POST['categorie']);
  $_POST['prix'] = htmlspecialchars($_POST['prix']);
  $_POST['Stock'] = htmlspecialchars($_POST['Stock']);
  $insertion = $pdo->prepare("INSERT INTO t_modeles (image,titre,description,fabricant,categorie,prix,Stock) VALUES (:image,:titre,:description,:fabricant,:categorie,:prix,:Stock)");
  $insertion->execute(array(

    ':image' => $_POST['image'],
    ':titre' => $_POST['titre'],
    ':description' =>   $_POST['description'],
    ':fabricant' =>   $_POST['fabricant'],
    ':categorie' =>   $_POST['categorie'],
    ':prix' =>   $_POST['prix'],
    ':Stock' =>   $_POST['Stock']


  ));
  header('location:tous.php');
  exit();
}

?>



<body>
  <header>
    <?php
    require_once('./inc/header.php');
    ?>
  </header>

  <!-- form to add products -->

  .<div class="container">
    <form class="row g-3" action="#" method="post" class="p-3 bg-light border border-primary rounded shadow">

      <div class="col-md-12">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" name="image" id="image" placeholder="Please enter your image url">
      </div>
      <div class="col-12">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre" placeholder="Please enter your name">
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="">
      </div>
      <div class="col-md-6">
        <label for="fabricant" class="form-label">Fabricant</label>
        <input type="text" class="form-control" name="fabricant" id="fabricant">
      </div>
      <div class="col-md-2">
        <label for="categorie" class="form-label">Categorie</label>
        <input type="text" class="form-control" name="categorie" id="fabricant">
      </div>
      <div class="col-md-2">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" class="form-control" name="prix" value="56" id="prix">
      </div>
      <div class="col-md-2">
        <label for="Stock" class="form-label">Stock</label>
        <select id="Stock" name="Stock" class="form-select">
          <option>en vente</option>
          <option>vendu</option>
        </select>
      </div>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <i class="fa-brands fa-github"></i>

      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Ajouter un modèle</button>
      </div>
    </form>

  </div>

  <footer>
    <?php
    require_once('./inc/footer.php');
    ?>
  </footer>