<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontaktformular</title>
  </head>
  <body>
    <form action="data.php" method="post">
        <div class="Anrede">
      <label>Anrede</label><br /><br />
        <input type="radio" id="frau" name="anrede" value="Frau">Frau <br>
        <input type="radio" id="herr" name="anrede" value="Herr">Herr<br>
        <input type="radio" name="anrede" value="Divers" />Anders<br>
        </div>
      <div class="Name">
      <label>Vollständiger Name</label><br />
        <input type="text" name="Vorname" />Vorname<br />
        <input type="text" name="Nachname" />Nachname<br />
      </div>
        <div class="Alter">
        <select name="Tag" id="tag">
            <script>
                for (let i = 1; i <= 31; i++) {
                    document.write("<option name='Tag' value='" + i + "'>" + i + " </option>");
                }
            </script>  
         
        </select>
        <select name="Monat" id="monat">
            <script>
                for (let i = 1; i <= 12; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
        <select name="Jahr" id="jahr">
            <script>
                for (let i = 1900; i <= 2021; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
        </div>
        <div class="Email">
        <label>E-Mail</label><br />
        <input type="email" name="E-Mail" placeholder="max.muster@gmail.com"/><br />
        </div>
        <div class="Telefonnummer">
        <label>Telefonnummer</label><br />
        <input type="tel" name="Telefonnummer" placeholder="070 999 99 99"/><br />
        </div>
        <div class= "Adresse">
        <label>Adresse</label><br />
        <label for="Strasse">Strasse und Hausnummer</label><br />
        <input type="text" name="Strasse" /><br />
        <label for="Stadt">Stadt</label><br />
        <input type="text" name="Stadt"><br>
        <label for="PLZ">PLZ</label><br />
        <input type="nummber" name="PLZ" /><br />
        <label for="Land" >Land</label><br>
        <input type="text" name="Land">
        </div>
        <div class="Text">
            <label for="Text">Text</label><br>
            <input type="content" name="text">
        </div>
             

      <input type="submit" value="Abschicken" />
    </form>
  </body>
</html>

