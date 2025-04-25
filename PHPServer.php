<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplo de envio de informacion PHP</h2>
    <form action="index.php" method="POST">
        <label for="">Nombre Completo: </label><br>
        <input type="text" name="nombre"><br>
        <label for="">Direccion: </label><br>
        <input type="text" name="direccion"><br>
        <label for="">Telefono: </label><br>
        <input type="text" name="telefono"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        //var_dump($_SERVER);
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["nombre"];
            $dir = $_POST["direccion"];
            $tel = $_POST["telefono"];

            echo "Nombre: ".$name."<br>";
            
            echo "Direccion: ".$dir."<br>";
            
            echo "Telefono: ".$tel."<br>";
        }
    ?>
</body>
</html>