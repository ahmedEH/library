  <?

  if(isset($_POST['terminer']))
  {

  $livre="
      <livre>
      <titre>".$_POST['livre']."</titre>
      <annee_prod>".$_POST['annee_prod']."</annee_prod>
      <isbn>".$_POST['isbn']."</isbn>
      <auteur>
        <nom>".$_POST['inom']."</nom>
        <prenom>".$_POST['prenom']."</prenom>
      </auteur>
      <section>
        <titre>".$_POST['section1']."</titre>
        <chapitre>
          <titre>".$_POST['chapitre1']."</titre>
          <paragraphe>
           ".$_POST['paragraphe1']."
          </paragraphe>
          <paragraphe>
           ".$_POST['paragraphe2']."
          </paragraphe>
        </chapitre>
        <chapitre>
          <titre>".$_POST['chapitre2']."</titre>
          <paragraphe>
           ".$_POST['paragraphe3']."
          </paragraphe>
          <paragraphe>
           ".$_POST['paragraphe4']."
          </paragraphe>
        </chapitre>
      </section>
          <section>
        <titre>".$_POST['section2']."</titre>
        <chapitre>
          <titre>".$_POST['chapitre3']."</titre>
          <paragraphe>
           ".$_POST['paragraphe5']."
          </paragraphe>
          <paragraphe>
           ".$_POST['paragraphe6']."
          </paragraphe>
        </chapitre>
        <chapitre>
          <titre>".$_POST['chapitre4']."</titre>
          <paragraphe>
           ".$_POST['paragraphe7']."
          </paragraphe>
          <paragraphe>
           ".$_POST['paragraphe8']."
          </paragraphe>
        </chapitre>
      </section>
    </livre>
  </bibleotheque>";


  $fichier="../xml/bibleotheque.xml";

  //ouverture en lecture et modification
  $text=fopen($fichier,'r') or die("Fichier manquant");
  $contenu=file_get_contents($fichier);
  $contenuMod=str_replace('</bibleotheque>', $livre, $contenu);
  fclose($text);

  //ouverture en écriture
  $text2=fopen($fichier,'w+') or die("Fichier manquant");
  fwrite($text2,$contenuMod);
  fclose($text2);





  header("location:sommaire.php");
  }

  ?>