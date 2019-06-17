<?php
include 'header.php';
?>

<?php
$reponse = $bdd->query('SELECT * FROM individu WHERE id_individu=1;');
$donnees = $reponse->fetch();
?>

<div id="corps" class="d-flex justify-content-center p-2">
  <div id="cadre_pres" class="rounded p-1 col-lg-9">
    <div id="nom_photo" class="row d-flex justify-content-around">
      <div class="col-lg-4 d-flex  align-self-center">
        <h1 class="d-flex"><?php echo $donnees['prenom']; ?><br><?php echo $donnees['nom']; ?></h1>
      </div>
      <div class="col-lg-3 p-3">
        <img src="<?php echo $donnees['photo']; ?>" alt="Photo_CV" title="Photo_CV" class="rounded-circle col-lg-12" />
      </div>
    </div>
    <div id="pres_simple" class="d-flex row p-3">
      <div id="ecole" class="col-lg-6 d-flex justify-content-center row">
        <div class="text-center">
          <h3>Etudiant à <?php echo $donnees['ecole']; ?></h3>
        </div>
        <div><img src="images/ynov_campus_bdx.png" alt="Photo_école" title="Photo_école" /></div>
      </div>
      <div id="competences" class="col-lg-6  d-flex justify-content-center row">
        <div class="text-center p-2">
          <h3>Compétences</h3>
        </div>
        <div class="p-2">
          <img src="images/HTMLCSSJSPHPSQL.png" class="col-lg-12" />
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>