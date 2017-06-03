<!DOCTYPE html>
<?php
ini_set('default_charset','UTF-8');
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['raio'])) {
    $area = ($_POST['raio'] * $_POST['raio']) * pi();
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/iframes.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <h1>CÍRCULO</h1>
            <form action="circulo.php" method="post">
                <div class="form-group">
                    <label>Raio:</label>
                    <input type="number" class="form-control" name="raio" min="1">
                </div>
                <p class="resultado">Resultado: 
                    <span id="total">
                        <?php
                        if (isset($_POST['raio'])) {
                            if (empty($_POST['raio'])) {
                                echo "Preencha todos os campos";
                            } else
                                echo round($area,2);
                        }
                        ?>
                    </span>
                </p>
                <button type="reset" class="btn btn-danger" onclick="hideTotal();">Limpar</button>
                <button type="submit" class="btn btn-success" onclick="showTotal();">Calcular</button>
            </form>
        </main>
        <script src="js/custom.js"></script>
    </body>
</html>
