<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['diagonalmaior']) && isset($_POST['diagonalmenor'])) {
    $area = ($_POST['diagonalmaior'] * $_POST['diagonalmenor']) / 2;
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
            <h1>LOSANGO</h1>
            <form action="losango.php" method="post">
                <div class="form-group">
                    <label>Diagonal maior:</label>
                    <input type="number" class="form-control" name="diagonalmaior" min="1">
                </div>
                <div class="form-group">
                    <label>Diagonal menor:</label>
                    <input type="number" class="form-control" name="diagonalmenor" min="1">
                </div>
                <p class="resultado">Resultado:
                    <span id="total">
                        <?php
                        if (isset($_POST['diagonalmaior']) && isset($_POST['diagonalmenor'])) {
                            if (empty($_POST['diagonalmaior']) || empty($_POST['diagonalmenor'])) {
                                echo "Preencha todos os campos";
                            } elseif (($_POST['diagonalmaior']) == ($_POST['diagonalmenor']))
                                echo "Valores não formam um losango!";
                            else
                                echo $area;
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
