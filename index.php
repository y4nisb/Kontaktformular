<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontaktformular</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="form">
        <h1>Kontaktformular</h1>
        <p>* Pflichtfelder</p>
        <form action="data.php" method="post">
            <label>* Anrede</label><br />
            <input type="radio" id="frau" name="anrede" value="Frau">Frau
            <input type="radio" id="herr" name="anrede" value="Herr">Herr
            <input type="radio" name="anrede" value="Divers">Anders<br><br>

            <label>Vollständiger Name</label><br />
            <input type="text" name="Vorname" placeholder="Vorname" required>
            <input type="text" name="Nachname" placeholder="Nachname" required><br>

            <label>Geburtsdatum</label><br />
            <select name="Tag" id="tag">
                <script>
                    for (let i = 1; i <= 31; i++) {
                        document.write("<option value='" + i + "'>" + i + " </option>");
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
                    for (let i = 1900; i <= 2023; i++) {
                        document.write("<option value='" + i + "'>" + i + "</option>");
                    }
                </script>
            </select><br>

            <label>* E-Mail</label><br />
            <input type="email" name="E-Mail" placeholder="max.muster@gmail.com" required><br>

            <label>Telefonnummer</label><br />
            <input type="tel" name="Telefonnummer" placeholder="070 999 99 99"><br>

            <label>Adresse</label><br />
            <input type="text" name="Strasse" placeholder="Strasse und Hausnummer"><br>
            <input type="text" name="Stadt" placeholder="Stadt"><br>
            <input type="number" name="PLZ" placeholder="PLZ"><br>
            <input type="text" name="Land" placeholder="Land"><br>

            <label for="Text">* Text</label><br>
            <textarea name="text" rows="4" required></textarea><br>

            <input type="submit" value="Abschicken">
        </form>
    </div>
</body>

</html>
