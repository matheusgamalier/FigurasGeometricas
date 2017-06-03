<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['raio']) && isset($_POST['geratriz'])) {
    $area = $_POST['raio'] * pi() * ($_POST['raio'] + $_POST['geratriz']);
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
            <h1>CONE</h1>
            <form action="cone.php" method="post">
                <div class="form-group">
                    <label>Raio:</label>
                    <input type="number" class="form-control" name="raio" min="1">
                </div>
                <div class="form-group">
                    <label>Geratriz:</label>
                    <input type="number" class="form-control" name="geratriz" min="1">
                </div>
                <p class="resultado">Resultado:
                    <span id="total">
                        <?php
                        if (isset($_POST['raio']) && isset($_POST['geratriz'])) {
                            if (empty($_POST['raio']) || empty($_POST['geratriz'])) {
                                echo "Preencha todos os campos";
                            } else
                                echo round($area, 2);
                        }
                        ?>
                    </span>
                    </span>
                </p>
                <button type="reset" class="btn btn-danger" onclick="hideTotal();">Limpar</button>
                <button type="submit" class="btn btn-success" onclick="showTotal();">Calcular</button>
            </form>
        </main>
        <script src="js/custom.js"></script>
    </body>
</html>
