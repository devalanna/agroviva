<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agroviva</title>
    <?php require_once(__DIR__ ."/includes/fonts.php") ?>
    <link rel="stylesheet" href="/css/estilos.css">

</head>

<body id="login-body">
    <main class="cent-login">
    <form id="form-login" method="post" action="/cadastrar">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <span id="nome-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <span id="email-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="senha">Criar senha:</label>
            <input type="password" id="senha" name="senha">
            <span id="senha-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="idade">Qual sua idade?</label>
            <input type="number" id="idade" name="idade">
            <span id="idade-erro" class="erro"></span>
        </div>
        <div class="form-group">
            <label for="professor">Você é professor?</label>
            <input required type="checkbox" id="professor" name="professor" value="true">
        </div>

        <div class="form-actions">
            <button class="submit-btn" type="submit">Cadastrar</button>
            <button class="cancel-btn" type="reset">Cancelar</button>
        </div>
        <div>
            <p>Já possui conta?</p>
            <a href="/login">Login</a>
        </div>
    </form>
    </main>
    

    <script src="/js/formulario.js"></script>
</body>

</html>