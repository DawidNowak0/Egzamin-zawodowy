<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokoje</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner1">
        <h2>WYNAJEM POKOI</h2>
    </div>
    <div class="flex">
        <div class="menu1">
            <a href="index.html">POKOJE</a>
        </div>
        <div class="menu2">
            <a href="cennik.php">CENNIK</a>
        </div>
        <div class="menu3">
            <a href="kalkulator.html">KALKULATOR</a>
        </div>
    </div>
    <div class="baner2"></div>
    <div class="flex">
        <div class="lewy"></div>
        <div class="srodkowy">
            <h1>Cennik</h1>
            <?php
                tabela();
            ?>
        </div>
        <div class="prawy"></div>
    </div>
    <div class="stopka">
        <p>Stronę opracował:</p>
    </div>
</body>
<?php
    function tabela(){
        $conn = mysqli_connect("localhost", "root", "", "rezerwacje");
        $SQL = $conn->query("SELECT * FROM pokoje");

        echo "<table>";

        while($row = mysqli_fetch_row($SQL)){
            echo"<tr><td>$row[0]<td>$row[1]<td>$row[2]";
        };
        echo "</table>";

   
        $conn -> close();
    };
?>
</html>