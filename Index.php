
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stijl.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    
    


    <h2 style="text-align: center;border-radius: 5px;">Studenten Activiteiten App</h2>
    <div class="welkom">
        Welkom! Hier kun je activiteiten bekijken, scores geven en foto's delen.
    </div>

    <div class="knoppen">
        <a href="student.php" class="knop">Bekijk Studenten</a>
        <a href="foto.php" class="knop">Bekijk Foto's</a>
        <a href="Score.php" class="knop">Bekijk Scores</a>
        <a href="reactie.php" class="knop">Bekijk Reacties</a>
    </div>

    <div class="laatste-activiteit">
        <h3>Laatste Activiteit</h3>
        <p>Bekijk de nieuwste activiteiten die door studenten zijn toegevoegd.</p>
        <a href="activiteit.php">Bekijk Activiteiten</a>
    </div>

    <footer>
        <p>&copy; 2025 Studenten Activiteiten App</p>
    </footer>
    
</body>
</html>

