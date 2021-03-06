<?php

declare(strict_types=1);
session_start();

?>  
<html class = "danceInfo">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/dancestylesheet.css">
<title>
    Dance Festival Locations
</title> 
</head>
<body>
<?php include "header.php";?>

<div class="danceTicketRow">
  <a class="DanceAbout" href="DanceInfo.php">    
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    Haarlem Dance
  </div>
  </a>

  <a class="DanceVenue" href="DanceLocation.php"> 
  <div class="danceTicketColumn" style=" text-align: center;margin-top:1vw">
    Location
  </div>
  </a>

  <a class="DanceQuestions" href="DanceFaqs.php">
  <div class="danceTicketColumn" style=" text-align: center; margin-top:1vw">
    FAQs 
  </div>
  </a>
</div> 

<div class = "danceLocation">

    <b>Caprera Openluchttheater</b> <br></br>
    Hoge Duin en Daalseweg 2 <br></br>
    2061 AG Bloemendaal <br></br>

    <b>Club Ruis</b><br></br>
    Smedestraat 31 <br></br>
    2011 RE Haarlem <br></br>

    <b>Club Stalker</b> <br></br>
    Kromme Elleboogsteeg 20 <br></br>
    2011 TS Haarlem <br></br>

    <b>Jopenkerk</b>  <br></br>
    Gedempte Voldersgracht 2  <br></br>
    2011 WD Haarlem <br></br>

    <b>Lichtfabriek</b> <br></br>
    Minckelersweg 2 <br></br>
    2031 EM Haarlem <br></br>

    <b>XO the Club </b>  <br></br>
    Grote Markt 8 <br></br>
    2011 RD Haarlem <br></br>

</div>


<?php include "footer.php";?> 

</body>
</html>