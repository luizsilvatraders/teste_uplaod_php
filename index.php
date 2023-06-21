<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivo</title>
</head>
<body>
<?php
if (isset($_POST["acao"])) {
    $arquivo = $_FILES["file"];
    $arquivoNovo = explode('.', $arquivo["name"]);

    if (strtolower($arquivoNovo[sizeof($arquivoNovo) - 1]) !== 'jpg') {
        die('Você não pode fazer upload deste tipo de arquivo.');
    } else {
        echo "Upload feito com sucesso.";
        move_uploaded_file($arquivo['tmp_name'], 'uploads/' .$arquivo['name']);
    }
}
?>

    <h2>Upload de Arquivo</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <input type="submit" name="acao" value="enviar"/>
    </form>
</body>
</html>
