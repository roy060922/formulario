<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br>
    <br>
    <h1>🚗registro de coche🚗</h1>
    <br>
    <br>
    <div class="carro">
        <form action="./conexion.php" method="post">
            <label for="marca">
                MARCA:
                <input type="text" name="marca" id="marca">
            </label>
            <br>
            <br>
            <label for="modelo">
                MODELO:
                <input type="text" name="modelo" id="modelo">
            </label>
            <br>
            <br>
            <label for="color">
                COLOR:
                <input type="color" name="color" id="color">
            </label>
        </label>
        <br>
        <br>
        <label for="enviar">
            <input type="submit" value="enviar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>