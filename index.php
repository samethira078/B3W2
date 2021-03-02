<?php
/* Assets toevoegen */
include 'assets/db.php';
include 'assets/send_info.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Onkunde</a></li>
                <li><a href="#">Paniek</a></li>
            </ul>
        </nav>
        <div class="onkunde">
            <h1>Onkunde</h1>
            <form action="index.php" method="post" style="display: <?php echo $hide ?>">
                <span>Wat zou je graag willen kunnen?</span><input type="text" name="1a" placeholder="<?php echo $a1_placeholder ?>">
                <span>Met welke persoon kun je goed opschieten?</span> <input type="text" name="2a" placeholder="<?php echo $a2_placeholder ?>">
                <span>Wat is je favoriete getal?</span> <input type="text" name="3a" placeholder="<?php echo $a3_placeholder ?>">
                <span>Wat heb je altijd bij je als je op vakantie gaat?</span> <input type="text" name="4a" placeholder="<?php echo $a4_placeholder ?>">
                <span>Wat is je beste persoonlijke eigenschap?</span> <input type="text" name="5a" placeholder="<?php echo $a5_placeholder ?>">
                <span>Wat is je slechtste persoonlijke eigenschap?</span> <input type="text" name="6a" placeholder="<?php echo $a6_placeholder ?>">
                <span>Wat is het ergste dat je kan overkomen?</span> <input type="text" name="7a" placeholder="<?php echo $a7_placeholder ?>"><br>
                <input type="submit" name="submit" value="Versturen">
            </form>
                <p style = "display: <?php echo $display?>;">Er zijn veel mensen die niet kunnen <?php echo $_SESSION["a1"]?>. Neem nou <?php echo $_SESSION["a2"]?>. 
                Zelfs met hulp van een <?php echo $_SESSION["a4"]?> of zelfs <?php echo $_SESSION["a3"]?> kan <?php echo $_SESSION["a2"]?> niet <?php echo $_SESSION["a1"]?>.
                Dit heeft niet veel te maken met gebrek aan <?php echo $_SESSION["a5"]?>, maar met een teveel aan <?php echo $_SESSION["a6"]?>. Teveel <?php echo $_SESSION["a6"]?>
                leidt tot <?php echo $_SESSION["a7"]?> en dat is niet goed als je wilt <?php echo $_SESSION["a1"]?>.</p>
        </div>
    </div>
</body>
</html>
<?php 
    $a
?>