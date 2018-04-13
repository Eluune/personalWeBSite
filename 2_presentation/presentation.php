<div id="section-2">
  <?php
    global $bdd;
    $requete="SELECT presentation from presentation";
    $resultats=$bdd->query($requete);
    $ligne=$resultats->fetch(PDO::FETCH_OBJ);
    $resultats->closeCursor();
  ?>

  <h1 class="section">A Propos</h1>

  <div id="presentation">
    <div id="presentation-image">
      <img src="images/dessin.png" alt="">
    </div>

    <div id="presentation-contenu">

      <div id="presentation-texte">
        <p><?php echo($ligne->presentation); ?></p>
      </div>

      <h1 class="section">Contact</h1>

      <div id="presentation-infos">
        <table>
          <tr>
            <th>Nom</th>
            <td>Petit <span id="nom">(mais puissant)</span></td>
          </tr>
        </table>
        <hr>

        <table>
          <tr>
            <th>Prénom</th>
            <td>Aloïs</td>
          </tr>
        </table>
        <hr>

        <table>
          <tr>
            <th>Mail</th>
            <td>alois.petit@gmail.com</td>
          </tr>
        </table>
        <hr>

        <table>
          <tr>
            <th>Téléphone</th>
            <td>06.61.68.23.71</td>
          </tr>
        </table>
        <hr>

        <table>
          <tr>
            <td id="presentation-btn-td"><button id="presentation-bouton" type="button" name="button">VOIR MON CV</button></td>
          </tr>
        </table>
      </div>

    </div>

  </div>

</div>
