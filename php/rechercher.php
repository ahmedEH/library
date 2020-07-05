    <? 
    echo '<!DOCTYPE html>

    <html>
    	<head>
    		<title>Book consultation</title>
    		<meta charset="utf-8">
          <link rel="icon" type="image/png" href="../images/icon.png"/>
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href ="../css/style.css">
  <title>looking for book</title>

    	</head>
    	<body>
    		<div class="header">
      <h1>Success Library</h1>
      <p>welcome here and be relax with our books and in our library</p>
    </div>
    <div class="topnav">
      <a class="active" href="../html/index.html">Home</a>
        <a href="../php/sommaire.php">Books</a>
            <a href="../html/ajout.html">Add book</a>
      <div class="search-container">

        <form action="sommaire.php" method="GET">

          <input type="search" placeholder="Search.." name="search" required="required">
          <button type="submit" name="sub"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>';

    $c=$s=0;
    $xml=simplexml_load_file("../xml/bibleotheque.xml") or die("Error: Cannot create object");
    foreach($xml->children() as $books) {
      if($_GET['isbn']==$books->isbn)
      {
      echo "<div class='container'><h1 align='center'>".$books->titre."</h1>";
    foreach($books->section as $section) {
      $s++;
    echo "<h2 >Section ".$s." : ".$section->titre."</h2>";
    foreach($section->chapitre as $chapitre) {
      $c++;
    echo "<h3 >Chapitre ".$c." : ".$chapitre->titre."</h3>";
    foreach($chapitre->paragraphe as $paragraphe) {
    echo "<p >".$paragraphe."</p>";
    }

    }

    }

    }
    echo "</div>";
    }
    echo'

    <div class="footer" style="float:bottom;">
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
