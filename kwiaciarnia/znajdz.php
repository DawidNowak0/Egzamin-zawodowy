<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>Moje kwiaty</h1>
    </div>
    <div class="container">
        <div class="lewy">
            <h3>Kwiaty dla Ciebie!</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
            <br>
            <a href="znajdz.php">Znajdź kwiaciarnię</a>
            <img src="gozdzik.jpg" alt="Goździk">
        </div>
        <div class="prawy">
            <img src="gerbera.jpg" alt="Gerbera">
            <img src="gozdzik.jpg" alt="Goździk">
            <img src="roza.jpg" alt="Róża">
            <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>

            <form action="znajdz.php" method="post">
                <input name="miasto">
                <button name="button">SPRAWDŹ</button>
            </form>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "kwiaciarnia");
                    if(mysqli_error($conn)){
                        echo "Błąd połączenia z bazą danych";
                    };

                if(isset($_POST['button'])){
                        $miasto = $_POST['miasto'];
                        $SQL = $conn->query("SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE `miasto` = '$miasto';");

                        while ($row =  mysqli_fetch_array($SQL)){
                            echo "$row[0], $row[1]";
                        };
                    };
                    mysqli_close($conn)
                ?>
        </div>
    </div>
    <div class="stopka">
        <h3>Stronę opracował:</h3>
    </div>
</body>
</html>