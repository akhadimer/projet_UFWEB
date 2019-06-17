<?php
include 'header.php';
?>

<div id="Projets" class="rounded d-flex flex-wrap flex-row p-3" style="background-color:white">
    <div id="projet1" class="p-2 d-flex flex-column" style="width:33%; height: 100%">

        <?php
        $reponse = $bdd->query('SELECT * FROM projet WHERE id_projet=1');
        $donnees = $reponse->fetch();
        ?>

        <h4 class="text-center">Projet : <?php echo $donnees['nom_projet']; ?></h4>
        <img src="<?php echo $donnees['photo_projet']; ?>" alt="..." style="height:100%; width:100%">
        <div id=texte_dessous_screen class="d-flex flex-column text-center">
            <p>Objectif :</p>
            <p><?php echo $donnees['Objectif_projet']; ?></p>
            <p>Technologie(s) utilisée(s) :</p>
            <p><?php echo $donnees['techno_utilise_projet']; ?></p>
            <p><a href="<?php echo $donnees['depot_git_projet']; ?>">Lien Github</a></p>
        </div>
    </div>
    <div id="projet2" class="p-2 d-flex flex-column" style="width:33%; height: 100%">

    <?php
        $reponse = $bdd->query('SELECT * FROM projet WHERE id_projet=2');
        $donnees = $reponse->fetch();
        ?>

        <h4 class="text-center">Projet : <?php echo $donnees['nom_projet']; ?></h4>
        <img src="<?php echo $donnees['photo_projet']; ?>" alt="..." style="height:100%; width:100%">
        <div id=texte_dessous_screen class="d-flex flex-column text-center">
            <p>Objectif :</p>
            <p><?php echo $donnees['Objectif_projet']; ?>
            </p>
            <p>Technologie(s) utilisée(s) :</p>
            <p><?php echo $donnees['techno_utilise_projet']; ?></p>
            <p><a href="<?php echo $donnees['depot_git_projet']; ?>">Lien Github</a></p>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>