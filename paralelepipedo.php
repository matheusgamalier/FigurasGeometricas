<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['profundidade'])) {
    $area = 2 * ($_POST['largura'] * $_POST['altura'] + $_POST['largura'] * $_POST['profundidade'] + $_POST['altura'] * $_POST['profundidade']);
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
            <h1>PARALELEPÍPEDO</h1>
            <form action="paralelepipedo.php" method="post">
                <div class="form-group">
                    <label>Largura:</label>
                    <input type="number" class="form-control" name="largura" min="1" onkeypress="return event.charCode >= 48 || event.charCode === 46">
                </div>
                <div class="form-group">
                    <label>Altura:</label>
                    <input type="number" class="form-control" name="altura" min="1" onkeypress="return event.charCode >= 48 || event.charCode === 46">
                </div>
                <div class="form-group">
                    <label>Profundidade:</label>
                    <input type="number" class="form-control" name="profundidade" min="1" onkeypress="return event.charCode >= 48 || event.charCode === 46">
                </div>
                <p class="resultado">Resultado:
                    <span id="total">
                        <?php
                        if (isset($_POST['largura']) && isset($_POST['altura']) && isset($_POST['profundidade'])) {
                            if (empty($_POST['largura']) || empty($_POST['altura']) || empty($_POST['profundidade'])) {
                                echo "Preencha todos os campos";
                            } elseif ($_POST['largura'] == $_POST['altura'] || $_POST['largura'] == $_POST['profundidade'] || $_POST['altura'] == $_POST['profundidade']) {
                                echo "Medidas não formam um paralelepípedo";
                            } else {
                                echo $area;
                            }
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
