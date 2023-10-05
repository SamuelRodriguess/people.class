<?php
include('handlePeople.php');
?>
<html>
<head>
    <title>PHP Class people</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, p{
            font-size: <?php echo $fontSize; ?>;
        }
    </style>
</head>

<body>
    <h1>PHP Class people</h1>
    <div class="mt-4">
        <h2>Preencha os dados:</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Data de Nascimento:</label>
                <input type="text" id="dateOfBirth" name="dateOfBirth" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP:</label>
                <input type="text" id="cep" name="cep" class="form-control">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Número:</label>
                <input type="text" id="number" name="number" class="form-control">
            </div>
            <div class="mb-3">
                <label for="complement" class="form-label">Complemento:</label>
                <input type="text" id="complement" name="complement" class="form-control">
            </div>
            <div class="mb-3">
                <label for="fontSize" class="form-label">Tamanho da Fonte:</label>
                <input type="text" id="fontSize" name="fontSize" class="form-control">
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Altura (cm):</label>
                <input type="text" id="height" name="height" class="form-control">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Peso (kg):</label>
                <input type="text" id="weight" name="weight" class="form-control">
            </div>
            <input type="submit" value="Enviar">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>