<div id="section-4">
  <?php
    global $bdd;
    $requete1="SELECT * from projet";
    $resultats=$bdd->query($requete1);
    $tableau=$resultats->fetchAll(PDO::FETCH_OBJ);
    $resultats->closeCursor();

    $requete2="SELECT COUNT(*) AS nbProjet from projet";
    $resultats=$bdd->query($requete2);
    $ligne=$resultats->fetch(PDO::FETCH_OBJ);
    $resultats->closeCursor();
  ?>

  <h1 class="section">Portfolio</h1>

  <?php for($i=0 ; $i < $ligne->nbProjet ; $i++): ?>
    <?php
      if($i % 2 == 0)
      {
        $position = true; // texte à gauche et image à droite
      }
      else
      {
        $position = false;
      }
    ?>

    <div class="portfolio">
      <div class="portfolio-titre-<?php if($position) { echo("1"); } else { echo("2"); } ?>"> <?php echo($tableau[$i]->nom); ?> <hr></div>
      <div class="portfolio-texte-<?php if($position) { echo("1"); } else { echo("2"); } ?>"> <p> <?php echo($tableau[$i]->description); ?> </p> </div>
      <a href="<?php echo($tableau[$i]->lien); ?>"><div class="portfolio-image-<?php if($position) { echo("1"); } else { echo("2"); } ?>" style="background-image: url('<?php echo($tableau[$i]->image); ?>'); background-size: cover; background-position: center;"> </div></a>
    </div>
  <?php endFor; ?>
</div>
