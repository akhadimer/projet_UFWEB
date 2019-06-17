<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="scripts/jquery-3.4.1.slim.min.js"></script>
  <script src="scripts/bootstrap.js"></script>
  <script src="scripts/popper.min.js"></script>
  <title>Mon CV</title>
</head>

<body class="container">
  <?php
  $server = "localhost";
  $db = "id9149619_bdd_ufweb";
  $login = "id9149619_akhadimer";
  $password = "informatique";
  $bdd = new PDO("mysql:host=$server;dbname=$db", $login, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ?>

  <header class="p-3">
    <nav class="rounded navbar navbar-expand-lg navbar-light" style="background-color: #2874A6;">
      <span class="navbar-brand mb-0 h2">
        <h2>Bienvenue sur mon CV en ligne</h2>
      </span>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="index.php">Accueil</a>
          <a class="nav-item nav-link active" href="presentation.php">Présentation</a>
          <a class="nav-item nav-link active" href="projets.php">Projets</a>
        </div>
      </div>
    </nav>
  </header>