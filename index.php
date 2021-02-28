<?php
// $correctAnswers = 0;
// if (isset($_POST['submit'])) {
//     foreach($_POST['checkbox'] as $value) {
//         echo $value;
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <?php
    $animal1 = $_POST['animal1'];
    $animal2 = $_POST['animal2'];
    $animal3 = $_POST['animal3'];
    $animal4 = $_POST['animal4'];
    $animal5 = $_POST['animal5'];
    $correctAnswers = 0;

        if (!empty($_POST)) {
            if ($animal1 == 'Šuo') {
                $correctAnswers++;
                $answer1= "<p style='color: green;'>Jūs atsakėte teisingai!</p>";
            } else {
                $answer1 = "<p style='color: red'>Jūs atsakėte neteisingai!</p>";
            }
            if ($animal2 == 'Katė') {
                $correctAnswers++;
                $answer2 = "<p style='color: green;'>Jūs atsakėte teisingai!</p>";
            } else {
                $answer2 = "<p style='color: red'>Jūs atsakėte neteisingai!</p>";
            }
            if ($animal3 == 'Žmogus') {
                $correctAnswers++;
                $answer3 = "<p style='color: green;'>Jūs atsakėte teisingai!</p>";
            } else {
                $answer3 = "<p style='color: red'>Jūs atsakėte neteisingai!</p>";
            }
            if ($animal4 == 'Žmogus') {
                $correctAnswers++;
                $answer4 = "<p style='color: green;'>Jūs atsakėte teisingai!</p>";
            } else {
                $answer4 = "<p style='color: red'>Jūs atsakėte neteisingai!</p>";
            }
            if ($animal5 == 'Žmogus') {
                $correctAnswers++;
                $answer5 = "<p style='color: green;'>Jūs atsakėte teisingai!</p>";
            } else {
                $answer5 = "<p style='color: red'>Jūs atsakėte neteisingai!</p>";
            }
            $resume = "Jūs teisingai atsakėte į $correctAnswers klausimus iš 5!";
        } else {
            echo "<p>Prašome pažymėti laukelius!</p>";
        }
    ?>
    <form action="" method="post">
        <h1 style="text-align: center;">Apklausa</h1>
        <p style="text-align: center; color: orange;"><?= $resume ?><p>
        <div class="section" style="display:grid; grid-template-columns: 1fr 1fr; justify-items: center; margin-bottom: 40px;">
            <div class="img" style="background-image: url('./snaige.png'); background-color: #cccccc; height: 200px; width: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
            </div>
            <div class="checkboxes">
                <p>Koks tai yra gyvūnas?</p>
                <input type="checkbox" id="animal1" name="animal1" value="Šuo">
                <label for="animal1"> Šuo</label><br>
                <input type="checkbox" id="animal2" name="animal1" value="Katė">
                <label for="animal2"> Katė</label><br>
                <input type="checkbox" id="animal3" name="animal1" value="Begemotas">
                <label for="animal3"> Begemotas</label><br>
                <input type="checkbox" id="animal4" name="animal1" value="Raganosis">
                <label for="animal4"> Raganosis</label><br>
            </div>
            <?= $answer1 ?>
        </div>
        <div class="section" style="display:grid; grid-template-columns: 1fr 1fr; justify-items: center; margin-bottom: 40px;">
            <div class="img" style="background-image: url('./simba.png'); background-color: #cccccc; height: 200px; width: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
            </div>
            <div class="checkboxes">
                <p>Koks tai yra gyvūnas?</p>
                <input type="checkbox" id="animal1" name="animal2" value="Katė">
                <label for="animal1"> Katė</label><br>
                <input type="checkbox" id="animal2" name="animal2" value="Paukštis">
                <label for="animal2"> Paukštis</label><br>
                <input type="checkbox" id="animal3" name="animal2" value="Vėžlys">
                <label for="animal3"> Vėžlys</label><br>
                <input type="checkbox" id="animal4" name="animal2" value="Krokodilas">
                <label for="animal4"> Krokodilas</label><br>
            </div>
            <?= $answer2 ?>
        </div>
        <div class="section" style="display:grid; grid-template-columns: 1fr 1fr; justify-items: center; margin-bottom: 40px;">
            <div class="img" style="background-image: url('./liutauras.png'); background-color: #cccccc; height: 200px; width: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
            </div>
            <div class="checkboxes">
                <p>Koks tai yra gyvūnas?</p>
                <input type="checkbox" id="animal1" name="animal3" value="Lapė">
                <label for="animal1"> Lapė</label><br>
                <input type="checkbox" id="animal2" name="animal3" value="Meška">
                <label for="animal2"> Meška</label><br>
                <input type="checkbox" id="animal3" name="animal3" value="Vilkas">
                <label for="animal3"> Vilkas</label><br>
                <input type="checkbox" id="animal4" name="animal3" value="Žmogus">
                <label for="animal4"> Žmogus</label><br>
            </div>
            <?= $answer3 ?>
        </div>
        <div class="section" style="display:grid; grid-template-columns: 1fr 1fr; justify-items: center; margin-bottom: 40px;">
            <div class="img" style="background-image: url('./vaida.png'); background-color: #cccccc; height: 200px; width: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
            </div>
            <div class="checkboxes">
                <p>Koks tai yra gyvūnas?</p>
                <input type="checkbox" name="animal4" value="Šikšnosparnis">
                <label for="animal4"> Šikšnosparnis</label><br>
                <input type="checkbox" name="animal4" value="Dramblys">
                <label for="animal4"> Dramblys</label><br>
                <input type="checkbox" name="animal4" value="Karvė">
                <label for="animal4"> Karvė</label><br>
                <input type="checkbox" name="animal4" value="Žmogus">
                <label for="animal4"> Žmogus</label><br>
            </div>
            <?= $answer4 ?>
        </div>
        <div class="section" style="display:grid; grid-template-columns: 1fr 1fr; justify-items: center; margin-bottom: 40px;">
            <div class="img" style="background-image: url('./akvile.png'); background-color: #cccccc; height: 200px; width: 200px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
            </div>
            <div class="checkboxes">
                <p>Koks tai yra gyvūnas?</p>
                <input type="checkbox" name="animal5" value="Šinšilas">
                <label for="animal1"> Šinšilas</label><br>
                <input type="checkbox" name="animal5" value="Rupūžė">
                <label for="animal2"> Rupūžė</label><br>
                <input type="checkbox" name="animal5" value="Žmogus">
                <label for="animal5"> Žmogus</label><br>
                <input type="checkbox" name="animal5" value="Liūtas">
                <label for="animal4"> Liūtas</label><br>
            </div>
            <?= $answer5 ?>
        </div>
        <p style="text-align: center;">Paspauskite "Pateikti" norėdami pamatyti rezultatą!</p>
        <input type="submit" name="btn" value="Pateikti" style="display: block; margin: 0 auto;">
    </form>

</body>
</html>