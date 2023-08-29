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
        <input type="radio" id="frau" name="fav_language" value="Frau">
        <label for="Frau">Frau</label><br>
        <input type="radio" id="herr" name="fav_language" value="Herr">
        <label for="Herr">Herr</label><br>
        <input type="radio" name="Divers" value="Divers" />
        <label for="Divers">Divers</label><br>
        </div>
      <div class="Name">
      <label>Vollständiger Name</label><br />
        <input type="text" name="Vorname" /><br />
        <label for= "Vorname">Vorname</label><br />
        <input type="text" name="Nachname" /><br />
        <label for= "Nachname">Nachname</label><br />
      </div>
        <div class="Alter">
        <select name="Tag" id="tag">
            <script>
                for (let i = 1; i <= 31; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
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
      <input type="submit" value="Abschicken" />
    </form>
  </body>
</html>

