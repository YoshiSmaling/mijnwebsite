<!DOCTYPE html>
<html lang="nl">
<head>
    <style>
        body {
            font-size: 25px;
        }
        input {
            font-family: "Century Schoolbook";
            font-size: 100%;
            display: inline;
        }
        .keuze {
            background-color: #999999;
            font-style: oblique;
            font-stretch: extra-expanded;
            font-size: 200%;
        }

    </style>
</head>
<body>

<form method="post" action="index.php">
    <input type="image" src="schaar.png" name="keuze" value="2">
    <input type="image" src="papier.png" name="keuze" value="1">
    <input type="image" src="steen.png" name="keuze" value="0">
    <input type="submit" name="reset" value="reset">
    <hr>
</form>
</body>

<?php
session_start();


$keuze =  array("Steen", "Papier", "Schaar");

if(!isset($_POST['reset'])) {


    if (!isset($_SESSION['computerscore']) AND !isset($_SESSION['spelerscore'])) {
        $_SESSION['computerscore'] = 0;
        $_SESSION['spelerscore'] = 0;
    };


    if (!isset($_POST['keuze'])) {
        echo "<a id='maakkeuze'>Maak een keuze om te beginnen</a>";
        $_POST['keuze'] = 0;
    };

    if ($_POST) {
        //print_r($_POST);
        $spelerkeuze = $_POST['keuze'];
        $computerkeuze = rand(0, 2);

        print "<h3>" . $keuze[$spelerkeuze] . " vs. " . $keuze[$computerkeuze] . "</h3>";


        if ($spelerkeuze == $computerkeuze) {
            print "<h1>Het is gelijk spel!</h1><br>";

        } elseif ($spelerkeuze == 0 AND $computerkeuze == 1) {
            $_SESSION['computerscore']++;
            print "<h1>Computer wint! </h1><br>";

        } elseif ($spelerkeuze == 1 AND $computerkeuze == 0) {
            $_SESSION['spelerscore']++;
            print "<h1>Speler wint!</h1><br>";

        } elseif ($spelerkeuze == 0 AND $computerkeuze == 2) {
            $_SESSION['spelerscore']++;
            print "<h1>Speler wint!</h1><br>";

        } elseif ($spelerkeuze == 2 AND $computerkeuze == 0) {
            $_SESSION['computerscore']++;
            print "<h1>Computer wint!</h1><br>";

        } elseif ($spelerkeuze == 1 AND $computerkeuze == 2) {
            $_SESSION['computerscore']++;
            print "<h1>Computer wint!</h1><br>";

        } elseif ($spelerkeuze == 2 AND $computerkeuze == 1) {
            $_SESSION['spelerscore']++;
            print "<h1>Speler wint!</h1><br>";
        }
    };

    echo "<h2>Computer Score " . $_SESSION['computerscore'] . "</h2>";
    echo "<h2>Speler Score " . $_SESSION['spelerscore'] . "</h2>";


}


if(isset($_POST['reset'])){

    echo "<h1>Maak een keuze om te beginnen</h1>";

    $_SESSION['computerscore'] = 0;
    $_SESSION['spelerscore'] = 0;
}



?>

</html>



