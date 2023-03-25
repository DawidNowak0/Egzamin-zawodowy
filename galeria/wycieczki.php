<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <section>
        <div id="lewy">
            <h2>KONTAKT</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>
        <div id="srodek">
            <h2>GALERIA</h2>
            <?php
                galeria()
            ?>
        </div>
        <div id="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <td>Jesień
                <td>Grupa 4+
                <td>Grupa 10+
                <tr>
                <td>5%
                <td>10%
                <td>15%
            </table>
        </div>
    </section>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
            dane()
        ?>
    </div>
    <footer>
        <p>Stronę wykonał:</p>
    </footer>
</body>
<?php
    function galeria(){
        $conn = mysqli_connect("localhost", "root", "aaaa", "egzamin");
        $SQL = $conn->query("SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis");

        while($row = mysqli_fetch_row($SQL)){
            echo "<img src='$row[0]' alt='$row[1]'>";
        };
        $conn -> close();
    };

    function dane(){
        $conn = mysqli_connect("localhost", "root", "aaaa", "egzamin");
        $SQL = $conn->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna");

        while($row = mysqli_fetch_row($SQL)){
            echo "$row[0]. $row[1], $row[2], cena: $row[3] <br>";
        };
        $conn -> close();
    };
?>
</html>