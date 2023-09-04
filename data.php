<?php
$count = 0;
include_once "datenbank.php";


    if(empty($_POST["anrede"])){
      echo "Anrede wird benötigt". "<br>";
      $count++;
    }else{
      $Anrede= $_POST["anrede"];
    } 
    if(empty($_POST["Vorname"])){
      $count++;
     echo "Vorname wird benötigt" . "<br>";
    }else{
      $Vorname = $_POST["Vorname"];
    }
  
    if(empty($_POST["Nachname"])){
      echo "Nachname wird benötigt" . "<br>";
      $count++;
    }else{
      $Nachname= $_POST["Nachname"];
    }
    
    $Telephon= $_POST["Telefonnummer"];
    

  
 
    if(empty($_POST["E-Mail"])){
     echo "E-Mail wird benötigt" . "<br>";
     $count++;
    }else{
      $Email= $_POST["E-Mail"];
    }
    
    $Strasse = $_POST["Strasse"];
    $Stadt = $_POST["Stadt"];
    $PLZ = $_POST["PLZ"];
    $Land = $_POST["Land"];
    
    if(empty($_POST["text"])){
      echo "Text wird benötigt" . "<br>";
      $count++;
    }else{
      $text= $_POST["text"];
    }
    $sql= "insert into tdaten (Anrede, Vorname, Nachname, Telefon, Email, Strasse, Stadt, Plz, Land, Nachricht) values ('$Anrede', '$Vorname', '$Nachname',  '$Telephon', '$Email', '$Strasse', '$Stadt', '$PLZ', '$Land', '$text')";

      if ($count === 0) {
          echo "Vielen Dank für Ihre Eingabe" . "<br>";
          mysqli_query($db_conn, $sql);
  }else{
    ?>
    <button type="submit" name="submit">Zurück</button>
<?php
  }
  
  

   


    
  
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
  
</form>
</body>
</html>
