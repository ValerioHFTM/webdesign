<html>
 
 <?php require 'header.php'?> 

 <body>
 <h1>Adressen</h1>
 <ul>
 <?php
 $namen = array("Hans","Fritz","Heinz");
 $lottozahlen = array(2, 16, 32, 34, 38, 42, 19);
 $haeufig = array("nie", "manchmal", "oft", 42);
//  echo $haeufig[1]; // -> 'manchmal'
//  print_r($namen); // Ausgabe aller Werte
//  var_dump($namen); // Ausgabe der Werte + Typ

//  foreach($haeufig as $wert) {
//     echo "<li>$wert</li>";
//     };
//  $orte = array("2500" => "Biel",
//     "2540" => "Grenchen",
//     "4500" => "Solothurn");
//     foreach ($orte as $plz => $ortsname) {
//         echo $plz . " " . $ortsname . "<br/>";
//        };

       $kontakt = array("Nr"=> "1",
       "Name"=> "Mueller",
       "Vorname"=>"Hans",
       "Strasse"=>"Erlenweg 3",
       "Land"=>"CH",
       "PLZ"=>"2540",
     "Ort"=>"Grenchen",
       "Tel"=>"1234",
       "EMail"=>"1@2" 
       );
       
       foreach ($kontakt as $schluessel => $wert){
        echo $schluessel . ": " . $wert . "<br/>";
    }
    echo "<br/>";


    $outPut ="<table width=380 border=\"1\">
    <tr>
       <td width=\"130\">Kundennummer:</td>
       <td width=\"250\">$kontakt[Nr]</td>
    </tr>
    <tr>
       <td>Vorname, Name:</td>
       <td>$kontakt[Vorname] , $kontakt[Name]</td>
    </tr>
    <tr>
       <td>Land, PLZ, Ort:</td>
       <td>$kontakt[Land] , $kontakt[PLZ], $kontakt[Ort]</td>
    </tr>
    <tr>
       <td>Kontakt Tel.:</td>
       <td>$kontakt[Tel]</td>
    </tr>
    <tr>
       <td>Email:</td>
       <td>$kontakt[EMail]</td>
    </tr>
    </table>";
    echo $outPut;
        
//  for ($i = 0; $i < 10; $i++) {
//  echo " <li>$i</li>\n";
//  }
 ?>
 </ul>
 </body>
</html>
