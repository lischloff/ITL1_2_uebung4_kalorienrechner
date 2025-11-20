<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe4</title>
</head>
<body>
    <h1>Kalorienrechner</h1>

    <?php
    // Werte der Variablen setzen
    $geschlecht = 0;
    $alter = 0;
    $größe = 0;
    $gewicht = 0;

    if (isset($_REQUEST["submit"])) {

  //Eingabe aus dem Formular in Zahlen umwandeln
    $geschlecht = (float)($_REQUEST["geschlecht"]);
    $alter = (float)($_REQUEST["alter"]);
    $größe = (float)($_REQUEST["größe"]);
    $gewicht = (float)($_REQUEST["gewicht"]);
    }

  //Berechnen des Kalorienbedarfs
    if ($geschlecht == 0){
        //Frau
        $kalorienbedarf = 655.1 + (9.6 * $gewicht) + (1.8 * $größe) + (4.7 * $alter);
    } else {
        //Mann
         $kalorienbedarf = 66.47 + (13.7 * $gewicht) + (5 * $größe) + (6.8 * $alter);
    }
    ?>

    <form method = "post" >
        <label for="geschlecht">Geschlecht:</label><br>
         <select name="geschlecht" id="geschlecht" required>
            <option value="">Bitte wählen</option>
            <option value="1">Männlich</option>
            <option value="0">Weiblich</option>
        </select><br>
  
        <label for="alter">Alter:</label><br>
        <input type="text" id="alter" name="alter" value="<?=$alter?>"><br>
  
        <label for="größe">Größe:</label><br>
        <input type="text" id="größe" name="größe" step="0.1" value="<?=$größe?>"><br>

        <label for="gewicht">Gewicht:</label><br>
        <input type="text" id="gewicht" name="gewicht" step="0.1" value="<?=$gewicht?>"><br><br>

  <input type="submit" name="submit" value="Berechnen"><br><br>
    </form>

    <?php
    echo "<h2>Ihre Eingaben sind: </h2>";
    echo "Geschlecht: " . ($geschlecht == 1 ? "Männlich" : "Weiblich") . "<br>";
    echo "Alter: $alter Jahre <br>";
    echo "Gewicht: $gewicht kg <br>";
    echo "Größe $größe cm <br>";
    echo "<h2>Kalorienbedarf:</h2>";
    echo "Ihr Kalorienbedarf beträgt ca. " . round($kalorienbedarf, 2) . "kcal pro Tag";
    ?>
</body>
</html>