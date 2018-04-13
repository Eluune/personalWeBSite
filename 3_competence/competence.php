<div id="section-3">
  <?php
    global $bdd;
    $requete1="SELECT * from competence";
    $resultats=$bdd->query($requete1);
    $tableau=$resultats->fetchAll(PDO::FETCH_OBJ);
    $resultats->closeCursor();

    $requete2="SELECT COUNT(*) AS 'nbComp' FROM competence";
    $resultats=$bdd->query($requete2);
    $ligne=$resultats->fetch(PDO::FETCH_OBJ);
    $resultats->closeCursor();

    $nbfor = ($ligne->nbComp / 3);
    if($ligne->nbComp % 3 != 0)
    {
      $nbfor++;
    }
  ?>

  <h1 class="section">Compétences</h1>
  <div class="handheld_select">Sélectionner une compétence</div>

  <div class="competence">
    <div class="competence-gauche">
      <p>Compétences</p>
    </div>

    <div class="competence-droite">
      <?php $j = 0; ?>
      <?php for($i = 0 ; $i < $nbfor ; $i++): ?>
        <div class="competence-contenu">
          <div class="circle circle-<?php echo($tableau[$j]->pourcentage); ?>" id="cirlce-<?php echo($tableau[$j]->id); ?>"> <span><?php echo($tableau[$j]->nom); ?></span> </div>
          <div class="circle circle-<?php echo($tableau[$j+1]->pourcentage); ?>" id="cirlce-<?php echo($tableau[$j+1]->id); ?>"> <span><?php echo($tableau[$j+1]->nom); ?></span> </div>
          <div class="circle circle-<?php echo($tableau[$j+2]->pourcentage); ?>" id="cirlce-<?php echo($tableau[$j+2]->id); ?>"> <span><?php echo($tableau[$j+2]->nom); ?></span> </div>

          <div class="comp-t" id="ce-<?php echo($tableau[$j]->id); ?>"> <?php echo($tableau[$j]->description); ?> </div>
          <div class="comp-t" id="ce-<?php echo($tableau[$j+1]->id); ?>"> <?php echo($tableau[$j+1]->description); ?> </div>
          <div class="comp-t" id="ce-<?php echo($tableau[$j+2]->id); ?>"> <?php echo($tableau[$j+2]->description); ?> </div>
        </div>
        <?php $j = $j + 3; ?>
      <?php endFor; ?>
    </div>
  </div>
</div>
