<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['largura']) && isset($_POST['altura'])) {
    $area = $_POST['largura'] * $_POST['altura'];
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
            <h1>RETÂNGULO</h1>
            <form action="retangulo.php" method="post">		
                <div class="form-group">
                    <label>Largura:</label>
                    <input type="number" class="form-control" name="largura" min="1">
                </div>
                <div class="form-group">
                    <label>Altura</label>
                    <input type="number" class="form-control" name="altura" min="1">
                </div>
                <p class="resultado">Resultado:
                    <span id="total">
                        <?php
                        if (isset($_POST['largura']) && isset($_POST['altura'])) {
                            if (empty($_POST['largura']) || empty($_POST['altura'])) {
                                echo "Preencha todos os campos";
                            } else
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
