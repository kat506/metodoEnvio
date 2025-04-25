<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplo de envio de informacion PHP (GET)</h2>
    <form action="index2.php" method="GET">
        <label>Universidad: </label><br>
        <input type="text" name="universidad"><br>
        <label>Carrera: </label><br>
        <input type="text" name="carrera"><br>
        <label>Semestre: </label><br>
        <input type="text" name="semestre"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["universidad"])) {
        $u = $_GET["universidad"];
        $c = $_GET["carrera"];
        $s = $_GET["semestre"];

        if (empty($u) || empty($c) || empty($s)) {
            echo "<br>Por favor, coloque todos los datos<br>";
        } else {
            echo "<br>Universidad: ".$u."<br>";
            echo "Carrera: ".$c."<br>";
            echo "Semestre: ".$s."<br>";
        }
    }
    ?>
</body>
</html>