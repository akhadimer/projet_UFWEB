<?php
include 'header.php';
?>

<div id="corps" class="d-flex row">
    <div id="côté_gauche" class="col-lg-3 p-1">
        <div id="cadre_côté_gauche" class="rounded d-flex flex-column p-2">
            <div class="text-center">
                <h3 class="titre_centre_interet">Mes centres d'intérêts</h3>
            </div>
            <div id="list_interet" class="text-center p-2">
                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=1');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet1" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>

                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=2');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet2" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>

                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=3');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet3" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>

                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=4');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet4" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>

                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=5');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet5" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>

                <?php
                $reponse = $bdd->query('SELECT * FROM centres_interets WHERE id_activite=6');
                $donnees_act = $reponse->fetch();
                ?>

                <div id="centre_interet6" class="p-1"><?php echo $donnees_act['nom_activite']; ?></div>
            </div>
        </div>
    </div>
    <div id="centre" class="col-lg-6 p-1">
        <div id="parcours_sco" class="p-2 rounded">
            <div id="cadre_parcours_sco">
                <h3 class="text-center">Parcours scolaire</h3>
                <div id="parcours_sco1" class="text-center">
                    <hr>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM ecole WHERE id_ecole=1');
                    $donnees = $reponse->fetch();
                    ?>

                    <h4 id="titre_nom_etablissement"><?php echo $donnees['nom_ecole']; ?>, <?php echo $donnees['ville_ecole']; ?></h4>
                    <p><?php echo $donnees['diplome_delivre_ecole']; ?>, <?php echo date("Y", strtotime($donnees['annee_fin_form_ecole'])); ?></p>
                </div>
                <div id="parcours_sco2" class="text-center">
                    <hr>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM ecole WHERE id_ecole=2');
                    $donnees = $reponse->fetch();
                    ?>

                    <h4 id="titre_nom_etablissement"><?php echo $donnees['nom_ecole']; ?>, <?php echo $donnees['ville_ecole']; ?></h4>
                    <p><?php echo date("Y", strtotime($donnees['annee_debut_form_ecole'])); ?> - <?php echo date("Y", strtotime($donnees['annee_fin_form_ecole'])); ?></p>
                </div>

                <div id="parcours_sco3" class="text-center">
                    <hr>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM ecole WHERE id_ecole=3');
                    $donnees = $reponse->fetch();
                    ?>

                    <h4 id="titre_nom_etablissement"><?php echo $donnees['nom_ecole']; ?>, <?php echo $donnees['ville_ecole']; ?></h4>
                    <p><?php echo $donnees['diplome_delivre_ecole']; ?>, <?php echo date("Y", strtotime($donnees['annee_fin_form_ecole'])); ?></p>
                </div>
            </div>
        </div>
        <div id="exp_pro" class="p-2">

            <?php
            $reponse = $bdd->query('SELECT * FROM experience_pro WHERE id_exp_pro=1');
            $donnees_exp1 = $reponse->fetch();
            ?>

            <?php
            $reponse = $bdd->query('SELECT * FROM experience_pro WHERE id_exp_pro=2');
            $donnees_exp2 = $reponse->fetch();
            ?>

            <?php
            $reponse = $bdd->query('SELECT * FROM experience_pro WHERE id_exp_pro=3');
            $donnees_exp3 = $reponse->fetch();
            ?>

            <div class="d-flex flex-row" style="height:400px">
                <div id="sommaire" class="col-lg-4 p-1" style="overflow-y: scroll;">
                    <nav id="navbar-example3" class="navbar navbar-light bg-light rounded">
                        <h3 class="navbar-brand" href="#">Expériences<br>professionnelles</h3>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link" href="#item-1">Job</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3 my-1" href="#item-1-1"><?php echo $donnees_exp1['nom_entreprise_exp_pro']; ?></a>
                            </nav>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3 my-1" href="#item-1-2"><?php echo $donnees_exp3['nom_entreprise_exp_pro']; ?></a>
                            </nav>
                            <a class="nav-link" href="#item-2">Stage</a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3 my-1" href="#item-2-1"><?php echo $donnees_exp2['nom_entreprise_exp_pro']; ?></a>
                            </nav>
                        </nav>
                    </nav>
                </div>
                <div data-spy="scroll" data-target="#navbar-example3" data-offset="0" class="col-lg-8 rounded" style="overflow-y: scroll; background-color:white;">
                    <h4 id="item-1">Job</h4>
                    <h5 id="item-1-1"><?php echo $donnees_exp1['nom_entreprise_exp_pro']; ?></h5>
                    <p>
                    <?php echo $donnees_exp1['date_debut_exp_pro']; ?> - <?php echo $donnees_exp1['date_fin_exp_pro']; ?>
                    </p>
                    <p>
                    <?php echo $donnees_exp1['tache_exp_pro']; ?>
                    </p>
                    <h5 id="item-1-2"><?php echo $donnees_exp3['nom_entreprise_exp_pro']; ?></h5>
                    <p>
                    <?php echo $donnees_exp3['date_debut_exp_pro']; ?> - <?php echo $donnees_exp3['date_fin_exp_pro']; ?>
                    </p>
                    <p>
                        <ul>
                            <li><?php echo $donnees_exp3['tache_exp_pro']; ?></li>
                        </ul>
                    </p>

                    <h4 id="item-2">Stage</h4>
                    <h5 id="item-2-1"><?php echo $donnees_exp2['nom_entreprise_exp_pro']; ?></h5>
                    <p>
                    <?php echo $donnees_exp2['date_debut_exp_pro']; ?> - <?php echo $donnees_exp2['date_fin_exp_pro']; ?>
                    </p>
                    <p>
                    <?php echo $donnees_exp2['tache_exp_pro']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="côté_droit" class="col-lg-3 p-1">
        <div id="cadre_côté_droit" class="rounded d-flex flex-column p-2">
            <div class="text-center">
                <h3 class="titre_compétences">Compétences</h3>
            </div>
            <div id="liste_competences">
                <div id="competence1">
                    <h4 id="titre_compétence">HTML</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=1');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence2">
                    <h4 id="titre_compétence" class="d-flex justify-content-end">CSS</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=2');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence3">
                    <h4 id="titre_compétence">JavaScript</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=3');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence4">
                    <h4 id="titre_compétence" class="d-flex justify-content-end">Python3</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=4');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence5">
                    <h4 id="titre_compétence">C</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=5');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence6">
                    <h4 id="titre_compétence" class="d-flex justify-content-end">PHP</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=6');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>

                <div id="competence7">
                    <h4 id="titre_compétence">SQL</h4>

                    <?php
                    $reponse = $bdd->query('SELECT * FROM competences WHERE id_competences=7');
                    $donnees_comp = $reponse->fetch();
                    ?>

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $donnees_comp['niveau_competence']; ?>%;" aria-valuenow="<?php echo $donnees_comp['niveau_competence']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $donnees_comp['niveau_competence']; ?>%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>