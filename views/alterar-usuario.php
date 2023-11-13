<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabalho</title>
  <?php require_once(__DIR__ ."/includes/fonts.php") ?>
  <link type="text/css" rel="stylesheet" href="/css/estilos.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body id="body-interno">
<main class="cent-login container">
    <form id="form-login" method="post" action="/alterar-usuario">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $_SESSION["name"] ?>">
            <span id="nome-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION["email"] ?>">
            <span id="email-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="senha">Nova senha:</label>
            <input type="password" id="senha" name="senha">
            <span id="senha-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="idade">Qual sua idade?</label>
            <input type="number" id="idade" name="idade" value="<?php echo $_SESSION["idade"] ?>">
            <span id="idade-erro" class="erro"></span>
        </div>
        <div class="form-actions">
            <button class="submit-btn" type="submit">Atualizar</button>
            <button class="cancel-btn" type="reset">Cancelar</button>
        </div>
    </form>
    </main>

</body>
</html>