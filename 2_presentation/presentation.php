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

        <button id="presentation-bouton" type="button" name="button"> <a target = "_blank" href="images/CV.pdf">VOIR MON CV</a> </button>

        <div class="tooltip"><a href="https://www.linkedin.com/in/aloïs-petit-260679a4/"><img class="pictogramme" src="images/linkedin.svg" alt="github"></a>
          <span class="tooltiptext">Profile Linkedin</span>
        </div>

        <div class="tooltip">
          <a href="https://github.com/Eluune"><img class="pictogramme" src="images/github.svg" alt="github"></a>
          <span class="tooltiptext">Profile GitHub</span>
        </div>

        <div class="tooltip">
          <a href="https://github.com/Eluune"><img class="pictogramme" src="images/gmail.svg" alt="gmail"></a>
          <span class="tooltiptext">M'envoyer un mail</span>
        </div>

      </div>

    </div>

  </div>

</div>
