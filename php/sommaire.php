
  <?php
  $xml=simplexml_load_file("../xml/bibleotheque.xml") or die("Error: Cannot create object");
  
  echo '
    <!DOCTYPE html>
  <html>
  <head>
  <title>Our books</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../images/icon.png"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href ="../css/style.css">

  </head>
  <body>
';
include("../html/header.html");
  ?>
  <?
  if(isset($_GET['sub']))
  {
  $search=$_GET['search'];
  echo'

  <h1 align="center">Books searched</h1>
  <table class="table table-hover">
  <thead>
  <tr >
  <th scope="col">ISBN</th>
  <th scope="col">Titre</th>
  <th scope="col">Annee de production</th>
  <th scope="col">Auteur</th>
  <th scope="col"></th>
  </tr>
  </thead>
  <tbody>';
  
  $decision=0;
  foreach($xml->children() as $books) {
  if($books->isbn==$search||$books->titre==$search||$books->annee_prod==$search||$books->auteur->nom==$search||$books->auteur->prenom==$search||($books->auteur->nom." ".$books->auteur->prenom)==$search)
  {
  echo "<tr>";
  echo "<th scope='row'>".$books->isbn . "</th>";
  echo "<td>".$books->titre . "</td>";
  echo "<td>".$books->annee_prod . "</td>";
  echo "<td>".$books->auteur->nom ." ". $books->auteur->prenom."</td>";
  echo "<td><a href='rechercher.php?isbn=".$books->isbn."'><button class='btn btn-success'>Consulter ce livre</button></a></td>";
  echo "</tr>";
  $decision=1;}

  }
  echo "</tbody></table>";
  if($decision==0) echo "</tbody></table><h2 color='red' align='center'>No results</h2>";
  ?>


  <?
  }
  else{



  echo '
  <h1 align="center">Our books</h1>
  <table class="table table-hover">
  <thead>
  <tr >
  <th scope="col">ISBN</th>
  <th scope="col">Titre</th>
  <th scope="col">Annee de production</th>
  <th scope="col">Auteur</th>
  <th scope="col"></th>
  </tr>
  </thead>
  <tbody>';
  foreach($xml->children() as $books) {
  echo "<tr>";
  echo "<th scope='row'>".$books->isbn . "</th>";
  echo "<td>".$books->titre . "</td>";
  echo "<td>".$books->annee_prod . "</td>";
  echo "<td>".$books->auteur->nom ." ". $books->auteur->prenom."</td>";
  echo "<td><a href='rechercher.php?isbn=".$books->isbn."'><button class='btn btn-success'>Consulter ce livre</button></a></td>";
  echo "</tr>";
  }
  echo'
  </tbody></table>';
  


  }


  

  echo '<div class="footer" style="float:bottom;">
  <h2 style="text-align:center">My links in social media</h2>
  <div class="row">
  <div class="media">
  <a href="https://www.facebook.com/oubbouahmed" class="facebooka"><img src="../images/facebook.png" class="facebookimg"/></a>
  <a href="https://www.linkedin.com/in/ahmed-elhassani-5a353818a/" class="linkedina"><img src="../images/linkedin.png" class="linkedinimg"/></a>
  <a href="https://www.instagram.com/ahmedprofessional1/" class="instagrama"><img src="../images/instagram.png" class="instagramimg"/></a>
  <a href="https://www.youtube.com/channel/UCEwxeAS3aoaR00vVFWE-q4g" class="youtubea"><img src="../images/youtube.png" class="youtubeimg"/></a>
  <a href="https://twitter.com/Ahmed86491057" class="twittera"><img src="../images/twitter.png" class="twitterimg"/></a>
  </div>
  </div>
  </div>
  </body>
  </html>';
  ?>