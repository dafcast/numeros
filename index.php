<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form action="/inc/numeros.php" method="POST">
        <div>
            <label for="numero1">Numero 1</label>
            <input type="text" id="numero1" name="numero[]">
        </div>

        <div>
            <label for="numero2">Numero 2</label>
            <input type="text" id="numero2" name="numero[]">
        </div>

        <div>
            <label for="numero3">Numero 3</label>
            <input type="text" id="numero3" name="numero[]">
        </div>

        <div>
            <label for="numero4">Numero 4</label>
            <input type="text" id="numero4" name="numero[]">
        </div>

        <div>
            <label for="numero5">Numero 5</label>
            <input type="text" id="numero5" name="numero[]">
        </div>

        <input type="submit" value="Ingresar">
    </form>
</div>
</body>
</html>