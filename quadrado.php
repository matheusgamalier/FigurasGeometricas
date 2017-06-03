<!DOCTYPE html>

<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['ladoa'])) {
    $area = $_POST['ladoa'] * $_POST['ladoa'];
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
            <h1>QUADRADO</h1>
            <form action="quadrado.php" method="post">
                <div class="form-group">
                    <label>Lado:</label>
                    <input type="number" class="form-control" name="ladoa" min="1">
                </div>
                <p class="resultado">Resultado: 
                    <span id="total">
                        <?php
                        if (isset($_POST['ladoa'])) {
                            if (empty($_POST['ladoa'])) {
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

